<!DOCTYPE html>

<html <?php language_attributes(); ?> >

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" content="Roberto Stringa - info@robertostringa.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<title>
		<?php wp_title('|', true, 'right'); ?>
		<?php bloginfo('name'); ?>
	</title>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>

	<!-- Initial scripts -->
	<!-- CSS general -->
	<link href="<?php print THEMEROOT; ?>/css/ilightbox.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
	
	<!-- Favicon and Apple Icons -->

	<link rel="shortcut icon" href="<?php print THEMEROOT; ?>/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php print THEMEROOT; ?>/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php print THEMEROOT; ?>/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php print THEMEROOT; ?>/icons/favicon-16x16.png">
	<!--<link rel="manifest" href="/manifest.json">-->
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#111111">
	<meta name="theme-color" content="#ffffff">
	<?php require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect; ?>
	<?php wp_head(); ?>
	
	<!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=GTM-P72L4PK"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push( arguments )
		};
		gtag( 'js', new Date() );
		gtag( 'config', 'UA-106978009-1' );
	</script>
	<!-- Google Tag Manager -->
	<script>
		( function ( w, d, s, l, i ) {
			w[ l ] = w[ l ] || [];
			w[ l ].push( {
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			} );
			var f = d.getElementsByTagName( s )[ 0 ],
				j = d.createElement( s ),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore( j, f );
		} )( window, document, 'script', 'dataLayer', 'GTM-P72L4PK' );
	</script>
	<!-- End Google Tag Manager -->
</head>

<body class="menu_fixed">
	<!-- Google Tag Manager (noscript) -->
	<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P72L4PK"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>

	<!-- End Google Tag Manager (noscript) -->
	<div class="loader">
		<div id="loader"> <img src="<?php print THEMEROOT; ?>/img/ajax-loader.gif" alt="cargando..."/> </div>
	</div>
	<header class="header_full" id="inicio" itemscope itemtype="http://schema.org/LocalBusiness">

		<!-- header desktop -->
		<div class="header_desktop hidden-md-down">
			<div class="header_full_top ">
				<div class="container"> <span class="info" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span class="fa fa-map-marker fa_left_5"></span> <span itemprop="streetAddress">42 Nro.571 e/6 y 7</span>, <span itemprop="addressLocality">La Plata</span>. &nbsp; &nbsp; &nbsp;<a href="tel:02214893636"><span class="fa fa-phone fa_left_5"></span><span itemprop="telephone"> Tel: 0221 489-3636</span></a>
					</span> <a href="https://www.facebook.com/Sala420LaPlata/
" title="Síguenos en Facebook" class="sociales_top" target="_blank"><span class="fa fa-facebook"></span></a> <a href="https://www.instagram.com/sala420lp/?hl=es" title="Síguenos en Instagram" class="sociales_top" target="_blank"><span class="fa fa-instagram"></span></a> <a href="https://twitter.com/SALA_420" title="Síguenos en Twitter" class="sociales_top" target="_blank"><span class="fa fa-twitter"></span></a> </div>
			</div>
			<!--- /header-full-top-->

			<div class="header_full_middle">
				<div class="container">
					<nav class="menu_desktop">
						<div class="nav_izq"> <a href="#cartelera" title="Ver la Cartelera de Sala 420 Teatro " class="menu_item js-menu-desktop-item">Cartelera</a> <a href="#talleres" title="Ver los Talleres y Seminarios de Sala 420 Teatro " class="menu_item js-menu-desktop-item">Talleres y Seminarios</a> </div>
						<a href="#inicio" title="Inicio de página" class="menu_logo js-logo-desktop"><img itemprop="image" src="<?php print THEMEROOT;?>/img/logo-top.png" class="no-lazy" alt="Teatro Sala 420"/><data itemprop="name" content="Teatro Sala 420"></data></a>
						<div class="nav_der"> <a href="#sala" title="Ver fotos de Sala 420 Teatro " class="menu_item js-menu-desktop-item">La Sala</a> <a href="#contacto" title="Contactarse con Sala 420 Teatro " class="menu_item js-menu-desktop-item">Contacto</a> </div>
					</nav>
				</div>
			</div>
			<!--- /header-full-middle-->

		</div>
		<!--- Fin header-desktop-->

		<div class="header_mobile hidden-lg-up clearfix">
			<div class="container"> <a href="#" class="hamburguer js-menu-show"><span class="fa fa-bars"></span></a> <a href="#inicio" class="logo_mobile js-logo-mobile"><img src="<?php print THEMEROOT;?>/img/logo.svg" class="no-lazy"/></a>
				<div class="sociales_mobile"> <a href="https://www.facebook.com/Sala420LaPlata/" title="Síguenos en Facebook" class="sociales_top"><span class="fa fa-facebook"></span></a> <a href=" https://www.instagram.com/sala420lp/?hl=es" title="Síguenos en Instagram" class="sociales_top"><span class="fa fa-instagram"></span></a> <a href="https://twitter.com/SALA_420" title="Síguenos en Twitter" class="sociales_top"><span class="fa fa-twitter"></span></a> </div>
			</div>
		</div>
		<!--- /header-mobile-->

	</header>
	<!-- /header-full-->

	<!-- SIDENAV -->
	<aside class="js-side-nav side-nav">
		<nav class="js-side-nav-container side-nav__container">
			<button class="js-menu-hide side-nav__hide"><span class="fa fa-close"></span></button>
			<header class="side-nav__header"> Secciones </header>
			<div class="side-nav__content">
				<div class="nav_mobile">
					<ul>
						<li class="mobile_item js-menu-mobile-item"><a href="#cartelera">Cartelera</a>
						</li>
						<li class="mobile_item js-menu-mobile-item"><a href="#talleres">Talleres</a>
						</li>
						<li class="mobile_item js-menu-mobile-item"><a href="#sala">La Sala</a>
						</li>
						<li class="mobile_item js-menu-mobile-item"><a href="#contacto">Contacto</a>
						</li>
					</ul>
				</div>
				<div class="mobile_info">
					<p class="info"> <span class="fa fa-map-marker fa_left_5"></span> 42 Nro.571 e/6 y 7, La Plata.<br>
						<a href="tel:02214893636"><span class="fa fa-phone fa_left_5"></span> Tel: 0221 489-3636</a><br>
						<span class="fa fa-clock-o fa_left_5"></span> Lunes a Viernes de 16 a 20hs<br>
					</p>
				</div>
			</div>
		</nav>
	</aside>