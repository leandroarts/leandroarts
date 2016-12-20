
<nav id="nav-wrap">

	<div class="nav">

		<ul id="menu-main">
			<li><a class="triggerContact" href="#">Request our services</a></li>
			<li><a class="triggerPortfolio active" href="#">Portfolio</a></li>
			<li><a class="triggerAbout" href="#">About</a></li>
		</ul>	

		<span style="clear: both; display: block;">&nbsp;</span>

		<!-- MENU MAGIC -->
		<script type="text/javascript">
		jQuery(function(){

			// Init..
			jQuery('#aboutBlock').hide();
			jQuery('#contactBlock').hide();

			// Contact..
			jQuery('.triggerContact').click(function(){ 
					jQuery('#aboutBlock, #ratesBlock, #galleryBlock, #callToAction, footer').slideUp(); 
					jQuery('#contactBlock').slideDown();
					jQuery('.triggerPortfolio, .triggerRates, .triggerAbout').removeClass('active');
					jQuery('.triggerContact').addClass('active');
				}
			);

			// Portfolio..
			jQuery('.triggerPortfolio').click(function(){ 
					jQuery('#aboutBlock, #ratesBlock, #contactBlock').slideUp(); 
					jQuery('#galleryBlock, #callToAction, footer').slideDown(); 
					jQuery('.triggerContact, .triggerRates, .triggerAbout').removeClass('active');
					jQuery('.triggerPortfolio').addClass('active');
				}
			);		

			// About..
			jQuery('.triggerAbout').click(function(){ 
					jQuery('#galleryBlock, #ratesBlock, #contactBlock, footer').slideUp(); 
					jQuery('#aboutBlock, #callToAction').slideDown(); 
					jQuery('.triggerPortfolio, .triggerContact, .triggerRates').removeClass('active');
					jQuery('.triggerAbout').addClass('active');
				}
			);			

		});

		</script>

		<script type="text/javascript">
		// RESPONSIVE NAV LOGIC
		jQuery(function(){
			var x = jQuery('#nav-wrap').width();
			var y = jQuery('.logo').width();
			var z = jQuery('#header .center').width();
			if ( x + y > z ) {
				jQuery('#header').addClass('mobile');
			}
		});
			
		</script>

	</div>

</nav><!-- ..nav-wrap -->

