<?php //Sección 5 (Texto sobre foto) ?>
<section id="quote" class="inner-shadow bg_img  d-flex justify-content-center  align-items-left text-center flex-column fadeIn slideIn wow">
  <div class="container py-50 fadeIn wow" data-wow-duration="0.5s" data-wow-delay="0.5s">
	  <div class="swiper-container">
	    <!-- Additional required wrapper -->
	    <div class="swiper-wrapper py-50">
	    <?php foreach ($seccion_quote_img as $index => $quote) { ?>
	    	<?php if ($seccion_quote_img[$index]) { ?>
	    	<div class="swiper-slide">
				<div class="row">
					<div class="col-md-12">
						<?php echo '<img src="', $url , '/_img/galeria/', $seccion_quote_img[$index] ,'" alt="' , $seccion_quote_img[$index] , '">'; ?>
					</div>
				</div>    				
				<?php } ?>
				<div class="row py-50 fadeIn wow" data-wow-duration="0.5s" data-wow-delay="0.6s">
					<div class="text-center">
						<h2><?php echo $seccion7_txt[$index]; ?></h2>		
					</div>
					
				</div>
				<?php if ($seccion_quote_sb_ttl[$index]) { ?>
				<div class="row fadeIn wow" data-wow-duration="0.5s" data-wow-delay="0.7s">
					<div class="col-md-12">
						<h3><?php echo $seccion_quote_sb_ttl[$index]; ?></h3>
					</div>
					
				</div>
				<?php } ?>
		   	</div> 	
	    <?php } ?>
	    </div>
	    <!-- If we need pagination -->
	    <div class="swiper-pagination"></div>
	    <!-- If we need navigation buttons -->
	     <!--<div class="swiper-button-prev"></div>-->
	     <!--<div class="swiper-button-next"></div>-->
	    <!-- If we need scrollbar -->
	    <div class="swiper-scrollbar"></div>
	  </div>
	</div>

</section>
