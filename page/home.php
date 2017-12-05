<?php
/* Template Name: CustomHome */	
?>
<!DOCTYPE html>
<html>
<head>
	<!-- <title>Siangsa</title> -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row" id="siangsa-head">
			<div class="logo">
				<img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.jpeg">
			</div>
			
		</div>
		<div class="row" id="siangsa-body">
			<div class="col-md-7 left-body">
				<h1>SELAMAT DATANG</h1>
				<small>Di Sistem Informasi Angkut Sampah</small>
			</div>
			<div class="col-md-5 right-body">
				<button class="btn btn-default" type="button">MASUK</button>
			</br>
			<button class="btn btn-default" type="button">DAFTAR</button>
		</div>			
	</div>
	<div class="row" id="siangsa-link">
		<div class="container-fluid">
			<div class="row">
				<ul class="menu-bawah navbar-nav">
					<li><a href="#">TENTANG SIANGSA</a></li>
					<li><a href="#">PANDUAN SIANGSA</a></li>
					<li><a href="#">SYARAT & KETENTUAN</a></li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>