<?php
session_start();
require_once("inc/init.php");
require_once("inc/config.ui.php");
$page_title = "Paquetes";
$page_css[] = "your_style.css";
include("inc/header.php");
$page_nav["Paquetes"]["sub"]["Nuevo"]["active"] = true;
include("inc/nav.php");
include_once "controlador/conexion.php";
if(!isset($_SESSION['Logueado']))
{
	
	?>
	<script type="text/javascript">
		window.location="index.php";
	</script>
	<?php
}
else
{
	?>
	<div id="main" role="main">
		<?php
		$breadcrumbs["Paquetes"] = "";
		include("inc/ribbon.php");
		?>
		<div id="content">
			<div class="row">
				<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
					<h1 class="page-title txt-color-blueDark">
						<i class="fa-fw fa fa-home"></i> 
						Paquetes
						<span>>  
							Nuevo
						</span>
					</h1>
				</div>
				<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				</div>
			</div>
			<section id="widget-grid" class="">
			<form method="POST" action="Backend/NuevoPaquete.php" enctype="multipart/form-data">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-3">
							<h1>Nombre de paquete</h1>
							<input type="text" class="form-control" name="Nombre">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<h3>Descripción</h3>
							<textarea name="Descripcion" class="form-control"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<h3>Precio</h3>
							<input type="number" class="form-control" name="Precio">
							<h3>Fecha</h3>
							<input type="text" class="form-control" name="Fecha">
							
							<h3>Tipo</h3>
							<select class="form-control" name="Tipo">
								<option value="Nacional">Nacional</option>
								<option value="Internacional">Internacional</option>
							</select>
						</div>
						<div class="col-sm-4">
							<h3>Moneda</h3>
							<select class="form-control"  name="Moneda">
								<option value="COP">COP</option>
								<option value="USD">USD</option>
							</select>
							<h3>Vigencia</h3>
							<input type="text" class="form-control" name="Vigencia">
						</div>
					</div>
					<h3>¿Que incluye?</h3>
					<div class="row">
						<div class="col-sm-4">
							<input type="checkbox" class="" name="Traslados"> <label>Traslados</label><br>
							<input type="checkbox" class="" name="Guia"> <label>Guia</label><br>
							<input type="checkbox" class="" name="Desayuno"> <label>Desayuno</label><br>
							<input type="checkbox" class="" name="STuristicos"> <label>Sitios Turistico</label><br>
							<input type="checkbox" class="" name="Hotel"> <label>Hotel</label><br>
							
							<br>

					 Banner<br><input type="file" name="Img1" class="form-control">
					 Imágen 1<br><input type="file" name="Img2" class="form-control">
					 Imágen 2<br><input type="file" name="Img3" class="form-control">
					 Imágen 3<br><input type="file" name="Img4" class="form-control">

						</div>
						<div class="col-sm-4">
							<input type="checkbox" class="" name="Impuestos"> <label>Impuestos</label><br>
							<input type="checkbox" class="" name="Equipaje"> <label>Equipaje</label><br>
							<input type="checkbox" class="" name="Shopping"> <label>Shopping</label><br>
							<input type="checkbox" class="" name="Alojamiento"> <label>Alojamiento</label><br>
							<!--<input type="checkbox" class="" name="Asistencia"> <label>Asistencia</label><br>-->
							<!--<input type="checkbox" class="" name="Alimentacion"> <label>Alimentación</label><br>-->
						</div>
					</div>

					<br>
					<input type="submit" class="btn btn-default" value="Registrar paquete">
				</div>
				</form>
			</section>
		</div>
	</div>
	<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-den="true">
		<form name="" action="paquetes.php" method="GET" id="">

			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">Buscar</h4>
					</div>
					<div class="modal-body"> 
						<div class="well well-sm well-primary">            
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="category">Buscar</label>
										<input type="text" class="form-control" name="buscar" id="buscar" required />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">                    
										<label for="category"> En</label>
										<select name='en' id="en" class="form-control">
											<option value="Nombres">Nombres</option><option value="Apellidos">Apellidos</option><option value="Telefono">Telefono</option><option value="Email">Email</option>
										</select>
									</div>
								</div>              
							</div>  
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">
								Cancelar
							</button>
							<input type="submit" class="btn btn-primary"  value="Buscar""> 

						</div>
					</div>
				</div>
			</div>
		</form>
	</div>

	<?php
	include("inc/footer.php");
}
?>
<?php 
include("inc/scripts.php"); 
?>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jqgrid/jquery.jqGrid.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jqgrid/grid.locale-en.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		jQuery("#jqgrid").jqGrid({
			<?php
			if(!$_GET['buscar'])
			{
				echo 'url:"Data/data_paquetes.php",';
			}else
			{
				echo 'url:"Busqueda/busqueda_clientes.php?buscar='.$_GET[buscar].'&en='.$_GET[en].'",';
			}
			?>
			datatype : "json",
			height : 'auto',
			colNames : ['Acciones', 'IdPaquete', 'Nombre', 'Descripcion','Precio', 'Moneda', 'Fechas', 'Vigencia', 'Tipo', 'Traslados', 'Guia', 'Desayuno', 'SitiosTuristicos', 'Hotel', 'Alojamiento', 'Impuestos', 'Equipaje', 'Shopping', 'Asistencia', 'Alimentacion'],
			colModel : [
			{ name : 'act', index:'act', sortable:false }, 
			{ name : 'id', index : 'id',editable : false ,hidden: true ,  align : "center",editable: false}, 
			{ name : 'Nombre', index : 'Nombre',  align : "center",editable : true }, 
			{ name : 'Descripcion', index : 'Descripcion', align : "center", editable : true }, 
			{ name : 'Precio', index : 'Precio', align : "center", editable : true }, 
			{ name : 'Moneda', index : 'Moneda', align : "center", editable : true }, 
			{ name : 'Fechas', index : 'Fechas', align : "center", editable : true},
			{ name : 'Vigencia', index : 'Vigencia', align : "center", editable : true},
			{ name : 'Tipo', index : 'Tipo', align : "center", editable : true},
			{ name : 'Traslados', index : 'Traslados', align : "center", editable : true},
			{ name : 'Guia', index : 'Guia', align : "center", editable : true},
			{ name : 'Desayuno', index : 'Desayuno', align : "center", editable : true},
			{ name : 'SitiosTuristicos', index : 'SitiosTuristicos', align : "center", editable : true},
			{ name : 'Hotel', index : 'Hotel', align : "center", editable : true},
			{ name : 'Alojamiento', index : 'Alojamiento', align : "center", editable : true},
			{ name : 'Impuestos', index : 'Impuestos', align : "center", editable : true},
			{ name : 'Equipaje', index : 'Equipaje', align : "center", editable : true},
			{ name : 'Shopping', index : 'Shopping', align : "center", editable : true},
			{ name : 'Asistencia', index : 'Asistencia', align : "center", editable : true},
			{ name : 'Alimentacion', index : 'Alimentacion', align : "center", editable : true}
			],
			rowNum : 15,
			rowList : [15, 30, 45],
			pager : '#pjqgrid',
			sortname : '',
			toolbarfilter: true,
			viewrecords : true,
			sortorder : "asc",
			gridComplete: function(){
				var ids = jQuery("#jqgrid").jqGrid('getDataIDs');
				for(var i=0;i < ids.length;i++){
					var cl = ids[i];
					var n= $("#jqgrid").getCell(ids[i],"id");
					be = "<button class='btn btn-xs btn-default' data-original-title='Editar' onclick=\"jQuery('#jqgrid').editRow('"+cl+"');\"><i class='fa fa-pencil'></i></button>"; 
					se = "<button class='btn btn-xs btn-default' data-original-title='Guardar' onclick=\"jQuery('#jqgrid').saveRow('"+cl+"');\"><i class='fa fa-save'></i></button>";
					ca = "<button class='btn btn-xs btn-default' data-original-title='Cancelar' onclick=\"jQuery('#jqgrid').restoreRow('"+cl+"');\"><i class='fa fa-times'></i></button>";
					jQuery("#jqgrid").jqGrid('setRowData',ids[i],{act:be+se+ca});
				}	
			},
			editurl : "Edit/edit_paquetes.php",
			caption : "Paquetes",
			
			multiselect : false,
			autowidth : true,
			multiboxonly: true 


		});
		jQuery("#jqgrid").jqGrid('navGrid', "#pjqgrid", {
			edit : false,
			add : true,
			del : true,
			search : false,
			refresh: true,
		});
		jQuery("#jqgrid").navButtonAdd('#pjqgrid',{
			caption: "",
			buttonicon: "ui-icon-search",
			title: "Buscar",
			onClickButton: function(){ 		   	 	    	
				$("#search").modal();
			}, 
			position:"last"
		});
		jQuery("#jqgrid").jqGrid('inlineNav', "#pjqgrid",{
			add:false,	
			save:false,
			cancel:false,
			edit:false,
			search:false,
		});
		$('.navtable .ui-pg-button').tooltip({
			container : 'body',
			
		});
		


		jQuery("#m1").click(function() {
			var s;
			s = jQuery("#jqgrid").jqGrid('getGridParam', 'selarrrow');
			alert(s);
		});
		jQuery("#m1s").click(function() {
			jQuery("#jqgrid").jqGrid('setSelection', "13");
		});
		//$("#jqgrid").jqGrid("navGrid", "#pager",{add: false, edit: false, del: false, search: false, refresh: false});
		$(".ui-jqgrid").removeClass("ui-widget ui-widget-content");
		$(".ui-jqgrid-view").children().removeClass("ui-widget-header ui-state-default");
		$(".ui-jqgrid-labels, .ui-search-toolbar").children().removeClass("ui-state-default ui-th-column ui-th-ltr");
		$(".ui-jqgrid-pager").removeClass("ui-state-default");
		$(".ui-jqgrid").removeClass("ui-widget-content");

		    // add classes
		    $(".ui-jqgrid-htable").addClass("table table-bordered table-hover");
		    $(".ui-jqgrid-btable").addClass("table table-bordered table-striped");


		    $(".ui-pg-div").removeClass().addClass("btn btn-sm btn-primary");
		    $(".ui-icon.ui-icon-plus").removeClass().addClass("fa fa-plus");
		    $(".ui-icon.ui-icon-pencil").removeClass().addClass("fa fa-pencil");
		    $(".ui-icon.ui-icon-trash").removeClass().addClass("fa fa-trash-o");
		    $(".ui-icon.ui-icon-search").removeClass().addClass("fa fa-search");
		    $(".ui-icon.ui-icon-refresh").removeClass().addClass("fa fa-refresh");
		    $(".ui-icon.ui-icon-disk").removeClass().addClass("fa fa-save").parent(".btn-primary").removeClass("btn-primary").addClass("btn-success");
		    $(".ui-icon.ui-icon-cancel").removeClass().addClass("fa fa-times").parent(".btn-primary").removeClass("btn-primary").addClass("btn-danger");

		    $( ".ui-icon.ui-icon-seek-prev" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-prev").removeClass().addClass("fa fa-backward");

		    $( ".ui-icon.ui-icon-seek-first" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-first").removeClass().addClass("fa fa-fast-backward");		  	

		    $( ".ui-icon.ui-icon-seek-next" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-next").removeClass().addClass("fa fa-forward");

		    $( ".ui-icon.ui-icon-seek-end" ).wrap( "<div class='btn btn-sm btn-default'></div>" );
		    $(".ui-icon.ui-icon-seek-end").removeClass().addClass("fa fa-fast-forward");

		})

$(window).on('resize.jqGrid', function () {
	$("#jqgrid").jqGrid( 'setGridWidth', $("#content").width() );
})

</script>


<?php 
include("inc/google-analytics.php"); 
?>
