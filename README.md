# Turnkey WordPress Tourism & Travel Benefit Club Portal Template

[![WordPress](https://img.shields.io/badge/WordPress-6.x%20%7C%207.x%20Ready-21759B?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.1%20%7C%208.2%20%7C%208.3-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net)
[![MariaDB](https://img.shields.io/badge/MariaDB-10.11-003545?style=for-the-badge&logo=mariadb&logoColor=white)](https://mariadb.org)
[![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=for-the-badge&logo=docker&logoColor=white)](https://www.docker.com)
[![Betheme](https://img.shields.io/badge/Theme-Betheme%20Premium-FF6C37?style=for-the-badge)](https://muffingroup.com/betheme/)

A complete, production-proven turnkey portal template designed for **travel benefit clubs**, **tourism agencies**, **exclusive membership programs**, and **hospitality vacation networks**. Built with the robust **Betheme** engine and **Slider Revolution**, featuring an interactive catalog of holiday destinations, member benefits, promotional packages, and customer lead acquisition.

---

## 🌟 Key Highlights & Template Architecture

- **Tourism & Travel Catalog**: Pre-configured layout for domestic and international vacation destinations, hotel alliances, tour itineraries, and seasonal discounts.
- **Member Benefits & Alliances**: Dedicated section showcase for brand alliances, corporate membership privileges, and VIP club access tiers.
- **Cinematic Visual Storytelling**: Integrated Slider Revolution hero presentations with high-impact video/image layers and call-to-action buttons.
- **Lead Capture & Inquiries**: Contact Form 7 integration with pre-built booking inquiry and membership application workflows.
- **Environment-Aware Configuration**: Dynamic `wp-config.php` that automatically binds to containerized environment variables or defaults gracefully to local setups.
- **Ready-to-Deploy Database**: Includes a complete, sanitized MySQL/MariaDB database dump (`database.sql`) containing the complete page structure, navigation menus, and widget arrangements.

---

## 🏗️ Architecture & Component Topology

```
+-------------------------------------------------------------+
|                     Client Browser                          |
+-------------------------------------------------------------+
                              | HTTP (Port 8082)
                              v
+-------------------------------------------------------------+
|             WordPress Web Container (PHP 8.2)               |
|  - Tourism Portal Theme (Betheme Engine)                    |
|  - Destination Pages, Member Club Tiers, Benefits Catalog   |
|  - Visual Hero Sliders (Slider Revolution 6.x)              |
|  - Lead Capture & Contact Handling (Contact Form 7)         |
+-------------------------------------------------------------+
                              | TCP / MySQL protocol
                              v
+-------------------------------------------------------------+
|              Database Service (MariaDB 10.11)               |
|  - Schema: alcurnia_wp (Tables: wp_posts, wp_options, etc.)|
|  - Auto-initialization from database.sql on first boot      |
+-------------------------------------------------------------+
                              |
                              v
+-------------------------------------------------------------+
|              phpMyAdmin Service (Port 8083)                 |
|  - Direct database inspection, option verification & tests  |
+-------------------------------------------------------------+
```

---

## 🚀 Quick Start with Docker Compose

Run the entire travel club portal locally with zero dependencies:

### 1. Clone the Repository
```bash
git clone git@github.com-personal:KevinAndrey96/alcurnia360.git
cd alcurnia360
```

### 2. Launch the Stack
```bash
docker compose up -d
```

Docker will:
1. Initialize the MariaDB database service.
2. Automatically import `database.sql` on initial creation.
3. Boot the WordPress container on port `8082`.
4. Spin up phpMyAdmin on port `8083`.

### 3. Access the Applications
- **Portal Storefront**: [http://localhost:8082](http://localhost:8082)
- **WordPress Admin**: [http://localhost:8082/wp-admin](http://localhost:8082/wp-admin)
- **phpMyAdmin**: [http://localhost:8083](http://localhost:8083) (Server: `db`, User: `alcurnia_user`, Password: `alcurnia_password`)

---

## 💻 Manual Deployment (LAMP / cPanel / Shared Hosting)

1. Upload all repository files to your web root (`public_html/` or `/var/www/html/`).
2. Create a MySQL/MariaDB database in your hosting control panel.
3. Import the included database backup `database.sql`.
4. Update database credentials in `wp-config.php` or provide environment variables:
   ```php
   define( 'DB_NAME', 'your_database_name' );
   define( 'DB_USER', 'your_database_user' );
   define( 'DB_PASSWORD', 'your_database_password' );
   define( 'DB_HOST', 'localhost' );
   ```
5. Update your domain URL using WP-CLI or SQL if deploying to a live domain:
   ```sql
   UPDATE wp_options SET option_value = 'https://yourtravelclub.com' WHERE option_name IN ('siteurl', 'home');
   ```

---

## 📦 Bundled Plugins & Visual Assets

| Component | Purpose | Status |
| :--- | :--- | :---: |
| **Betheme Core** | Visual page building, typography, header styles, and grid | Active |
| **Slider Revolution** | High-performance layered destination hero sliders | Active |
| **Contact Form 7** | Membership lead generation and reservation request forms | Active |
| **Portfolio Assets** | High-resolution mockups and screenshots in `portfolio-assets/` | Included |

---

## 🛡️ License & Attributions

- WordPress core is licensed under the **GNU General Public License v2 or later**.
- Custom layout modifications, configuration scripts, and template structuring are maintained for developer portfolio demonstration and deployment template usage.
