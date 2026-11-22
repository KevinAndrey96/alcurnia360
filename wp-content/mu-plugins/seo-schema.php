<?php
/**
 * Plugin Name: SEO structured data (generic, config-driven)
 * Description: Enriches Yoast SEO's Organization with the local-business data found in seo-schema.json (same folder). Optional hidden H1 on the home page.
 * Version: 1.0
 * Deploy: copy this file AND scripts/config/<domain>.schema.json (renamed seo-schema.json) to wp-content/mu-plugins/.
 * Keys: type (e.g. LocalBusiness / ProfessionalService), description, foundingDate, email, telephone, address{streetAddress,addressLocality,addressCountry},
 *   areaServed[names], languages[], hours{days[],opens,closes}, contacts[{telephone,type,languages[],email}], services[], catalog_name, hidden_h1 (home page, theme without H1).
 */
defined( 'ABSPATH' ) || exit;
function seo_schema_cfg() { static $c = null; if ( null === $c ) { $f = __DIR__ . '/seo-schema.json'; $c = is_readable( $f ) ? json_decode( file_get_contents( $f ), true ) : array(); if ( ! is_array( $c ) ) { $c = array(); } } return $c; }

add_filter( 'wpseo_schema_organization', function ( $d ) {
	$c = seo_schema_cfg(); if ( ! $c ) { return $d; }
	$d['@type'] = array( 'Organization', isset( $c['type'] ) ? $c['type'] : 'LocalBusiness' );
	foreach ( array( 'description', 'foundingDate', 'email', 'telephone' ) as $k ) { if ( ! empty( $c[ $k ] ) ) { $d[ $k ] = $c[ $k ]; } }
	if ( ! empty( $c['address'] ) ) { $d['address'] = array_merge( array( '@type' => 'PostalAddress' ), $c['address'] ); }
	if ( ! empty( $c['areaServed'] ) ) { $d['areaServed'] = array_map( function ( $n ) { return array( '@type' => 'Place', 'name' => $n ); }, $c['areaServed'] ); }
	if ( ! empty( $c['languages'] ) ) { $d['knowsLanguage'] = $c['languages']; }
	if ( ! empty( $c['hours'] ) ) { $d['openingHoursSpecification'] = array( array_merge( array( '@type' => 'OpeningHoursSpecification' ), array( 'dayOfWeek' => $c['hours']['days'], 'opens' => $c['hours']['opens'], 'closes' => $c['hours']['closes'] ) ) ); }
	if ( ! empty( $c['contacts'] ) ) { $d['contactPoint'] = array_map( function ( $x ) { $o = array( '@type' => 'ContactPoint', 'telephone' => $x['telephone'], 'contactType' => isset( $x['type'] ) ? $x['type'] : 'customer service' ); if ( ! empty( $x['languages'] ) ) { $o['availableLanguage'] = $x['languages']; } if ( ! empty( $x['email'] ) ) { $o['email'] = $x['email']; } return $o; }, $c['contacts'] ); }
	if ( ! empty( $c['services'] ) ) {
		$id = isset( $d['@id'] ) ? $d['@id'] : home_url( '/#organization' ); $offers = array();
		foreach ( $c['services'] as $n ) { $offers[] = array( '@type' => 'Offer', 'itemOffered' => array( '@type' => 'Service', 'name' => $n, 'provider' => array( '@id' => $id ) ) ); }
		$d['hasOfferCatalog'] = array( '@type' => 'OfferCatalog', 'name' => isset( $c['catalog_name'] ) ? $c['catalog_name'] : 'Services', 'itemListElement' => $offers );
	}
	return $d;
} );

// Home page without an H1 (slider hero): add a visually hidden one (Betheme sizes H1 at 160 px, so do not change the tag).
add_action( 'mfn_hook_top', function () {
	$c = seo_schema_cfg();
	if ( ! empty( $c['hidden_h1'] ) && is_front_page() ) { echo '<h1 class="screen-reader-text" style="position:absolute;left:-9999px;">' . esc_html( $c['hidden_h1'] ) . '</h1>'; }
} );
