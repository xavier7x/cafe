<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo ucfirst(strtolower($varAcceso['nombre'])); ?> | <?php echo $pdet_valor['empresa']; ?></title>
    <!--inicio meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <meta name="keywords" content="<?php echo $varAcceso['meta_keywords']; ?>">
    <meta name="description" content="<?php echo $varAcceso['meta_description']; ?>">
    <meta name='author' content='markservices'>
    <meta name='owner' content='Lcdo. Walter Xavier Moreno Aviles'>
    <meta name="robots" content="index, follow">
    <!--fin meta-->
    <!--icono de pagina web-->
    <link href="<?php echo $pdet_valor['hostapp']; ?>/images/system/favicon.ico?v=<?php echo $pdet_valor['webversion']; ?>" rel="icon" type="image/x-icon"/>
    <!--fin icono pagina web-->
    <!--inicio libs pagina web-->
    <?php
            for($f=0; $f<count($varAcceso['framework']); $f++){
                switch($varAcceso['framework'][$f]){ 
                    case 'jquery-ui':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.min.css" rel="stylesheet" type="text/css"/>';
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.structure.min.css" rel="stylesheet" type="text/css"/>';
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.theme.min.css" rel="stylesheet" type="text/css"/>';
                        break;
                    case 'bootstrap':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/css/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>';
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/css/bootstrap-3.3.7-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" media="all"/>';
                        break;
                    case 'bootstrap-datepicker':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/bootstrap-datepicker-master/dist/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"/>';
                        break;
                    case 'jqgrid':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/Guriddo_jqGrid_JS_5.1.1/css/ui.jqgrid-bootstrap.css" rel="stylesheet" type="text/css"/>';
                        break;
                    case 'jquery-treeview':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jzaefferer-jquery-treeview/jquery.treeview.css" rel="stylesheet" type="text/css"/>';
                        break;
                    case 'font-awesome':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/css/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>';
                        break;
                    case 'jstarbox':
                        echo '<link href="'.$pdet_valor['hostapp'].'/lib/js/jStarbox-master/css/jstarbox.css" rel="stylesheet" type="text/css"/>';
                        break;
                }
            }
        ?>
    <!--fin libs pagina web-->
    <!--estilos-->
    <link href="<?php echo $pdet_valor['hostapp']; ?>/css/<?php echo $varAcceso['ventana']; ?>/style.css?v=<?php echo $pdet_valor['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $pdet_valor['hostapp']; ?>/css/cabpie/style.css?v=<?php echo $pdet_valor['webversion']; ?>" rel="stylesheet" type="text/css"/>
    <!--fin estilos-->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
    <!--fin fonts-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />	
    <!--//theme-style-->

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!-- start menu -->
    
	<script src="js/simpleCart.min.js"> </script>
	
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="social">
				<ul>
					<li <?php if(empty($pdet_valor['facebook'])){echo 'class="hidden"';}?>><a href="<?php echo $pdet_valor['facebook']; ?>" target="_blank"><i class="facebok"> </i></a></li>
					<li <?php if(empty($pdet_valor['twitter'])){echo 'class="hidden"';}?>><a href="<?php echo $pdet_valor['twitter']; ?>" target="_blank"><i class="twiter"> </i></a></li>
					<li <?php if(empty($pdet_valor['googleplus'])){echo 'class="hidden"';}?>><a href="<?php echo $pdet_valor['googleplus']; ?>" target="_blank"><i class="inst"> </i></a></li>
                    <li <?php if(empty($pdet_valor['instagram'])){echo 'class="hidden"';}?>><a href="<?php echo $pdet_valor['instagram']; ?>" target="_blank"><i class="goog"> </i></a></li>
					
						<div class="clearfix"></div>
				</ul>
			</div>
			<div class="header-left">
			
				<div class="search-box">
					<div id="sb-search" class="sb-search">
						<form action="#" method="post">
							<input class="sb-search-input" placeholder="Enter your search term..." type="search"  id="search">
							<input class="sb-search-submit" type="submit" value="">
							<span class="sb-icon-search"> </span>
						</form>
					</div>
				</div>
			
<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->

				<div class="ca-r">
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> </div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
				
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="<?php echo $pdet_valor['hostapp']; ?>">
                    <img src="<?php echo $pdet_valor['hostapp']; ?>/images/system/logo.png?v=<?php echo $pdet_valor['webversion']; ?>" width="100" height="50" class="img-responsive" alt="<?php echo $pdet_valor['empresa']; ?>">
                    </a></h1>
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li><a class="color8" href="index.html">BED LINEN</a></li>	
				      <li><a class="color1" href="#">CUSHIONS</a>
				      	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Bedskirt</a></li>
										<li><a href="products.html">Blanket/Throw</a></li>
										<li><a href="products.html">Collection/Duvet</a></li>
										<li><a href="products.html">Comforter</a></li>
										<li><a href="products.html">Comforter Set</a></li>
										<li><a href="products.html">Decorative Pillow</a></li>
										<li><a href="products.html">Mattress Pad </a></li>
										<li><a href="products.html">Mattress Topper</a></li>
										<li><a href="products.html">Pillow</a></li>
										<li><a href="products.html">Pillow Protector</a></li>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Alpaca</a></li>
										<li><a href="products.html">Cashmere</a></li>
										<li><a href="products.html">Cotton</a></li>
										<li><a href="products.html">Cotton Blend</a></li>
										<li><a href="products.html">Down</a></li>
										<li><a href="products.html">Down Alternative</a></li>
										<li><a href="products.html">Egyptian Cotton</a></li>
										<li><a href="products.html">Modal</a></li>
										<li><a href="products.html">Pima Cotton</a></li>
										<li><a href="products.html">Silk </a></li>
										
									</ul>	
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Bedskirt</a></li>
										<li><a href="products.html">Blanket/Throw</a></li>
										<li><a href="products.html">Collection/Duvet</a></li>
										<li><a href="products.html">Comforter</a></li>
										<li><a href="products.html">Comforter Set</a></li>
										<li><a href="products.html">Decorative Pillow</a></li>
										<li><a href="products.html">Mattress Pad </a></li>
										<li><a href="products.html">Mattress Topper</a></li>
										<li><a href="products.html">Pillow</a></li>
										<li><a href="products.html">Pillow Protector</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
					</li>
				    <li class="grid"><a class="color2" href="#">BEDSPREADS</a>
					  	<div class="mepanel">
						<div class="row">
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Bedskirt</a></li>
										<li><a href="products.html">Blanket/Throw</a></li>
										<li><a href="products.html">Collection/Duvet</a></li>
										<li><a href="products.html">Comforter</a></li>
										<li><a href="products.html">Comforter Set</a></li>
										<li><a href="products.html">Decorative Pillow</a></li>
										<li><a href="products.html">Mattress Pad </a></li>
										<li><a href="products.html">Mattress Topper</a></li>
										<li><a href="products.html">Pillow</a></li>
										<li><a href="products.html">Pillow Protector</a></li>
										
									</ul>	
								</div>								
							</div>
							<div class="col1">
								<div class="h_nav">
									<ul>
										<li><a href="products.html">Alpaca</a></li>
										<li><a href="products.html">Cashmere</a></li>
										<li><a href="products.html">Cotton</a></li>
										<li><a href="products.html">Cotton Blend</a></li>
										<li><a href="products.html">Down</a></li>
										<li><a href="products.html">Down Alternative</a></li>
										<li><a href="products.html">Egyptian Cotton</a></li>
										<li><a href="products.html">Modal</a></li>
										<li><a href="products.html">Pima Cotton</a></li>
										<li><a href="products.html">Silk </a></li>
										
									</ul>		
								</div>							
							</div>
							<div class="col1">
								<div class="h_nav">
									
									<ul>
										<li><a href="products.html">Bedskirt</a></li>
										<li><a href="products.html">Blanket/Throw</a></li>
										<li><a href="products.html">Collection/Duvet</a></li>
										<li><a href="products.html">Comforter</a></li>
										<li><a href="products.html">Comforter Set</a></li>
										<li><a href="products.html">Decorative Pillow</a></li>
										<li><a href="products.html">Mattress Pad </a></li>
										<li><a href="products.html">Mattress Topper</a></li>
										<li><a href="products.html">Pillow</a></li>
										<li><a href="products.html">Pillow Protector</a></li>
									</ul>	
								</div>												
							</div>
						  </div>
						</div>
			    </li>
				<li><a class="color4" href="login.html">Login</a></li>				
				<li><a class="color6" href="contact.html">Contact</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>