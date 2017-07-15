<div class="footer w3layouts">
				<div class="container">
			<div class="footer-top-at w3">
			
				<div class="col-md-3 amet-sed w3l">
				<h4>MORE INFO</h4>
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
</body>
</html>