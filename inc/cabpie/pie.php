<div class="footer w3layouts">
				<div class="container">
			<div class="footer-top-at w3">
			
				<div class="col-md-3 amet-sed w3l">
				<h4>MAS INFORMACIÓN</h4>
				<ul class="nav-bottom">
						<li><a href="<?php echo $pdet_valor['hostapp']; ?>/envio" ><?php echo $menuSys['envio']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/terminos" ><?php echo $menuSys['terminos']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/preguntas" ><?php echo $menuSys['preguntas']['nombre']; ?></a></li>
                <li><a href="<?php echo $pdet_valor['hostapp']; ?>/contacto" ><?php echo $menuSys['contacto']['nombre']; ?></a></li>
				<li><a href="<?php echo $pdet_valor['hostapp']; ?>/login" ><?php echo $menuSys['login']['nombre']; ?></a></li>  
                	
					</ul>	
				</div>
				<div class="col-md-3 amet-sed w3ls">
					<h4>CATEGORIES</h4>
					<ul class="nav-bottom">
						<li><a href="<?php echo $pdet_valor['hostapp']; ?>"><?php echo $menuSys['inicio']['nombre']; ?></a></li>
							<?php
									
							for($f=0; $f < count($vectorMenu); $f++){
								if( count($vectorMenu[$f]['subcategorias']) > 0 ){
									echo '<li><a href="'.$pdet_valor['hostapp'].'/'.$vectorMenu[$f]['nombre_seo'].'" >'.ucfirst(strtolower($vectorMenu[$f]['nombre'])).'</a></li>';
								}
							}
							
							?>
							<li><a href="<?php echo $pdet_valor['hostapp']; ?>/registro" ><?php echo $menuSys['registro']['nombre']; ?></a></li>
					</ul>
					
				</div>
				<div class="col-md-3 amet-sed agileits">
					<h4>NEWSLETTER</h4>
					<div class="stay agileinfo">
						<div class="stay-left wthree">
							<form action="#" method="post">
								<input type="text" placeholder="Enter your email " required="">
							</form>
						</div>
						<div class="btn-1 w3-agileits">
							<form action="#" method="post">
								<input type="submit" value="Subscribe">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
					
				</div>
				<div class="col-md-3 amet-sed agileits-w3layouts">
				<h4>CONTACT US</h4>
					<p><?php echo $pdet_valor['direccionempresa']; ?></p>
					<p><?php echo $pdet_valor['telefonopedidos']; ?></p>	
					<p><a rel="nofollow" href="mailto:<?php echo $pdet_valor['mailatencioncliente']; ?>"><?php echo $pdet_valor['mailatencioncliente']; ?></a></p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class w3-agile">
		<p>© <?php echo date('Y'); ?> <?php echo $pdet_valor['empresa']; ?>. Derechos Reservados | Design by  <a rel="nofollow" href="#" target="_blank"> MarkService</a></p>
		</div>
		</div>
<!-- smooth scrolling -->
<a href="#" id="toTop" style="display: block;">
    <span id="toTopHover" style="opacity: 1;"></span>
</a>
<!-- //smooth scrolling -->
<?php
    for($f=0; $f<count($varAcceso['framework']); $f++){
        switch($varAcceso['framework'][$f]){       
            case 'jquery':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery/jquery-2.2.4.min.js"></script>';
                break;
            case 'jquery-ui':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery-ui/jquery-ui-1.12.0.custom/jquery-ui.min.js"></script>';
                break;
            case 'bootstrap':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>';
                break;
            case 'bootstrap-datepicker':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/bootstrap-datepicker-master/dist/locales/bootstrap-datepicker.es.min.js"></script>';
                break;                    
            case 'bootboxjs':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/bootboxjs/bootbox.min.js"></script>';
                break;
            case 'totop':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/totop/jquery.ui.totop.min.js"></script>';
                break;
            case 'easing':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/easing/jquery.easing.1.3.js"></script>';
                break;
            case 'mycart':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jquery.mycart-master/jquery.mycart.min.js"></script>';
                break;
            case 'vide':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/vide/jquery.vide.min.js"></script>';
                break;
            case 'jstarbox':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jStarbox-master/jstarbox.js"></script>';
            case 'easy-responsive-tabs':                    
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/easyResponsiveTabs/js/easyResponsiveTabs.js"></script>';
                break;
            case 'jqgrid':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Guriddo_jqGrid_JS_5.1.1/js/i18n/grid.locale-es.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Guriddo_jqGrid_JS_5.1.1/js/jquery.jqGrid.min.js"></script>';
                break;
            case 'jquery-treeview':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/jzaefferer-jquery-treeview/jquery.treeview.js"></script>';
                break;
			case 'memenu':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/memenu/memenu.js"></script>';
                break;
            case 'highcharts':
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Highcharts-4.2.5/js/highcharts.js"></script>';
                echo '<script type="text/javascript" language="javascript" src="'.$pdet_valor['hostapp'].'/lib/js/Highcharts-4.2.5/js/modules/exporting.js"></script>';
                break;
        }
    }
?>

    

<!-- start menu -->
	
<script type="text/javascript" src="js/memenu.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $pdet_valor['hostapp']; ?>/js/cabpie/funciones.js?v=<?php echo $pdet_valor['webversion']; ?>"></script>
<script type="text/javascript" language="javascript" src="<?php echo $pdet_valor['hostapp']; ?>/js/<?php echo $varAcceso['ventana']; ?>/funciones.js?v=<?php echo $pdet_valor['webversion']; ?>"></script>

<?php
$url = $_SERVER['HTTP_HOST'];
if(
    strpos($url, 'localhost') === false &&
    strpos($url, '192.168.100.4') === false
){
?>


<script>
</script>
<?php } ?>
</body>
</html>