<?php get_header(); ?>

<!-- CONTAINER -->
<div class="container">

	<div id="main" role="main">

        <div class="content" style="width: 100%; margin: 0px;">
		    <div>
		      <h2>Oh Dear! There is nothing at this URL.. </h2>
			  <!-- Quote randomizer -->
		  		<?php
	  			$i = rand(1, 7);
	  			if ($i == 1) { 
					?><blockquote>
			  			"We shall not cease from exploration, and the end of all our exploring will be to arrive where we started and know the place for the first time." - T. S. Eliot
					</blockquote><?php 
				}
				if ($i == 2) {
					?><blockquote>
						"Do the difficult things while they are easy and do the great things while they are small. A journey of a thousand miles must begin with a single step." - Lao-tzu, The Way of Lao-tzu. Chinese philosopher (604 BC - 531 BC)
					</blockquote><?php 
				}
				if ($i == 3) {
					?><blockquote>
						"Whenever I have a problem I just sing, then I realize my voice is worse than the problem"
					</blockquote><?php 				
				}
				if ($i == 4) {
					?><blockquote>
						“I've missed more than 9000 shots in my career. I've lost almost 300 games. 26 times, I've been trusted to take the game winning shot and missed. I've failed over and over and over again in my life. And that is why I succeed.” - Michael Jordan
					</blockquote><?php 				
				}			
				if ($i == 5) {
					?><blockquote>
						"Failure is a process, not an obstacle."
					</blockquote><?php 					
				}
				if ($i == 6) {
					?><blockquote>
						"Failure is a process, not an obstacle."
					</blockquote><?php 				
				}
				if ($i == 7) {
					?><blockquote>
						"You are lost the instant you know what the result will be" - Juan Gris.
					</blockquote><?php 				
				}															
				?>
			  <h4>404 ERROR</h4>
			  <p><em>Please check for typos in the URL. If you believe something is broken, please contact our <a href="http://leandroarts.com">Web Design Team</a></em></p>.		    
		    </div>
		  </div><!-- ..content -->

	</div><!-- ..main -->

</div><!-- ..container -->

<?php get_footer(); ?>