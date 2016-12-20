
<nav id="nav-wrap">

	<div class="nav">

		<ul id="menu-main">
			<li><a href="<?php bloginfo('url'); ?>"><img style="position: relative; top: 2px; margin-right: 8px;" src="<?php bloginfo('template_url'); ?>/images/icons/home.png" /> Back to main menu</a></li>
		</ul>	

	</div>

</nav><!-- ..nav-wrap -->

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

