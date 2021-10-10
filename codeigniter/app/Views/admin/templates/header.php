<?php 
$uri = service('uri');
 ?>
<!DOCTYPE html>
<html lang="<?= $locale ?>">
<head>
	<title>GALOP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/admin-styles.css?v=0">
	<!-- <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="/css/summernote.min.css"/> -->
	<!-- <link href="/css/slimselect.min.css" rel="stylesheet"></link> -->
	<?php if(isset($styles)): ?>
		<?php foreach($styles as $style): ?>
			<link rel="stylesheet" type="text/css" href="/css/<?=$style?>.css"/>
		<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>
<div class="main_content">

	<div class="barra">
		
		<img src="/img/logo.png" class='logo' alt="GALOP">

		<button id="toggler">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="toggle-menu">&#9776;</span>
		</button>

		<ul class="menu_barra" id="navbarSupportedContent">
		<li><a href="/shop">Shop</a></li>
		<li><a href="/nuevo">Nuevo</a></li>
		<li><a href="/accesorios">Accesorios</a></li>
		<li><a href="/nosotros">Nosotros</a></li>

		</ul>
		
	</div>
    
</div>

