<?php
session_start();
$title="Editar Receta";
/* Llamar la Cadena de Conexion*/ 
include ("../conexion.php");
//Insert un nuevo producto
$imagen_demo="demo.png";
$id_banner=intval($_GET['id']);
$sql=mysqli_query($con,"select * from banner where id='$id_banner' limit 0,1");
$count=mysqli_num_rows($sql);
if ($count==0){
	//header("location: bannerlist.php");
	//exit;
}
$rw=mysqli_fetch_array($sql);
$titulo=$rw['titulo'];
$descripcion=$rw['descripcion'];
$url_image=$rw['url_image'];
$orden=intval($rw['orden']);
$estado=intval($rw['estado']);
$active_config="active";
$active_banner="active";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/ico/favicon.ico">
    <title><?php echo $title;?></title>
    <!-- Bootstrap core CSS -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
	<link href="css/preview-image.css" rel="stylesheet">
	<style>


body{
	background:Linear-gradient(-45deg,#ee7752,#e73c7e,#23a6d5,#23d5ab);
	background-size: 800% 800%;
	position:relative;
	animation:change 10s ease-in-out infinite
}

@keyframes change {
        0%{
            background-position:0 50%;
		}
		
		50%{
			background-position:100% 50%;
		}
		100%{
			background-position:0 50%;
		}
}



		
	</style>
  </head>
  <body>

    <div class="container">
		
      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
	  
	   <ol class="breadcrumb">
		  <li><a href="mostrar.php">Galeria de las recetas</a></li>
		  
		</ol>
		 <div class="col-md-7">
		 <h3>Muestra de plato</h3>
			<form class="form-horizontal" id="editar_banner">
				 
			 
			  
			  <div class="form-group">
				<h1><?php echo $titulo;?></h1>
				<div class="col-sm-9">
				 
				  <input type="hidden" class="form-control" id="id_banner" value="<?php echo intval($id_banner);?>" name="id_banner">
				</div>
			  </div>

			  <div class="form-group">
			  	<h3><?php echo $descripcion;?><h3>

				</div>
			  </div>
					  
			  
			  
			  
			  
			  
			
			 
			  
			  
			  
			</form>
			
			
			
		</div>
		<div class="col-md-5">
		 
		 
		 <form class="form-vertical">
		 
			<div class="form-group">
				
				<div class="col-sm-12">
				
				 
				 <div class="fileinput fileinput-new" data-provides="fileinput">
								  <div class="fileinput-new thumbnail" style="max-width: 100%;" >
									  <img class="img-rounded" src="../img/banner/<?php echo $url_image;?>" />
								  </div>
								  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 250px;"></div>
								 
					</div>					
				</div>
			
			  </div>
			  
			
			  
			 
			  
			  
		 </form>
		</div>
    </div> 
	</div><!-- /container -->

		<?php include("footer.php");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="js/jasny-bootstrap.min.js"></script>
	
  </body>
</html>


	

