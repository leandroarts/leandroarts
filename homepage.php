<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

<!-- CONTAINER -->
<div class="container">

   <!-- CONTENT -->
	<div class="content" style="width: 100%;">

            <!-- GALLERY BLOCKS -->
            <div id="galleryBlock">

                  <!-- BLOCKS -->
                  <?php $loop_news = new WP_Query(array('post_type' => 'gallery', 'posts_per_page' => 99)); ?>
                  <?php while ( $loop_news->have_posts() ) : $loop_news->the_post(); ?>       

                  <div class="gallery_cell">

                        <!-- Featured Image -->
                              <a href="<?php 
                                          $myFeatured_link = get_post_custom_values("myFeatured_link"); 
                                          if ( is_array($myFeatured_link)) { 
                                                echo $myFeatured_link[0];
                                          }  
                                          if ( !is_array($myFeatured_link)) { 
                                                the_permalink(); 
                                          } 
                                    ?>" title=""><?php the_post_thumbnail( array(300,300) ); ?></a>
                              

                        <!-- Title -->
                        <h2 class="gallery_title">
                              <a href="<?php 
                                    $my_link = get_post_custom_values("my_link"); 
                                    if ( is_array($my_link)) { 
                                          echo $my_link[0];
                                    }  
                                    if ( !is_array($my_link)) { 
                                          the_permalink(); 
                                    } 
                                    ?>">
                                    <?php the_title(); ?>
                              </a>
                        </h2>

                  
                  </div><!-- ..galleryCell -->            

                  <?php endwhile; ?>
                  <!-- end BLOCKS -->


                  <!-- LOADING FX -->
                  <script type="text/javascript">      
                    jQuery(function(){
                      jQuery('.gallery_cell a, .gallery_cell h2').css('opacity', '0');
                    });
                    jQuery(window).load(function(){
                      jQuery('.gallery_cell a, .gallery_cell h2').css('opacity', '1');
                      jQuery(".gallery_cell img").fadeIn(500);
                    });
                  </script>

                  <!-- ANIMATION HOVER -->
                  <script type="text/javascript">
              		// jQuery(function(){
              			jQuery('.gallery_cell').hover(
              				function(){
              					jQuery(this).find('a img').fadeTo('fast', 1.00);
              				},
              				function (){
              					jQuery(this).find('a img').fadeTo('fast', 0.35);
              				}
              			);
              		// });
                  </script>


            </div><!-- ..galleryBlock -->


            <!-- ABOUT -->
            <div id="aboutBlock">
              
              <!-- ABOUT -->            
              <div id="aboutBlurb">
                <h4>Proudly powered by 100% Renewable Energy</h4>
                <p>
                  <img src="<?php bloginfo('template_url'); ?>/images/about.jpg" alt="LEANDROARTS" />                  
                  <br/>
                  Hello, and welcome to <strong>LEANDROARTS</strong>. We are a creative studio in the NYC metro, USA. We specialize in excellent customer service, easy to use interfaces, with sharp design and powerful returns on investment. Our goal is to make amazing visual experiences for your visitors and a profitable tool for your business. 
                </p>
                <p>
                We specialize building on top of the <a href="http://wordpress.org" target="_blank">Wordpress</a> CMS and other industry-standard open source platforms for publishing, eCommerce, etc. Our clients include individuals, local businesses and large corporations. We tap into a talented network of creative and technical professionals to handle almost any task, large or small. 
                </p>
                <p>
                Our work is regularly featured across the web, in galleries and museums throughout the country; for a look at the art studio visit <a href="http://leandroflaherty.com" title="Artist Studio">LeandroFlaherty.com</a>.
                <br />
                <strong style="font-size: 0.8em;">All profits from LEANDROARTS contribute directly to the Arts.</strong>
                </p>
              </div>


              <!-- Testimonials -->
              <h2>Testimonials</h2>
              <blockquote>
                "This is the only website designer to use. His skill set, quality of work, timely execution, customer service and professionalism are the best I have seen. He answers questions before, during and after completion of the project. Responds quickly and offers experienced advice on how to create exactly the site you desire. He teaches how to do basic site upkeep and offers reasonably priced services for more advanced maintenance. I recommend him with absolute certainty of client satisfaction. Call him." <strong>- Lisa Best. Clothing Designer</strong> 
              </blockquote>

              <blockquote>
              	"Leandro was wonderful; he took us through the process step by step, took the agony out of the design decisions, and tutored us on how to use Wordpress. We love our new site and would happily use his services again." <strong>- Alexia Scott</strong>
              </blockquote>

              <blockquote>
                "Leo, I got a couple of nice leads from the website so it seems to be working. One new client said he was very impressed with the website presentation. I also notice we seem to be rising ranking in Google, with more keywords, etc. Traffic is up substantially since you started working on the site; You are doing a wonderful job, Thank you."<strong>- William L. Pegg, Jr. - Attorney at law</strong> 
              </blockquote>

              <!-- Services -->
              <h2>Services</h2>
              <ul>
                <li>Design</li>
                <li>HTML5 / CSS3 / JAVASCRIPT Web Development</li>
                <li>Responsive Mobile &amp; Tablet Development</li>
                <li>Wordpress CMS and Plugins</li>
                <li>eCommerce (Shopify, etc)</li>
                <li>Custom Web App development</li>
                <li>Search Engine Optimization (SEO)</li>
                <li>PSD to HTML &amp; PSD to Worpress CMS</li>
              </ul>
              
              <!-- Past Clients -->
              <h2>Clients</h2>
              <ul id="clientsList">
              	<li>Scotch Porter</li>
              	<li>New York Wine Events</li>
                <li>Anheuser Busch</li>
                <li>The Heineken Corporation</li>
                <li>Penguin Books</li>
                <li>The 4Sixty6 Nightclub</li>
                <li>TED Talks</li>
                <li>YWCA</li>
                <li>RT46 Chevrolette</li>
                <li>NJPAC - New Jersey Performing Arts Center</li>
                <li>GMLV Makerting Agency</li>
                <li>Getheatre Global Empowerment Theatre</li>
                <li>WMI - Women's Marketing Inc</li>
                <li>GAP</li>
                <li>GAP Kids</li>
                <li>Growco</li>
                <li>AlterG</li>
                <li>California Home Warranty</li>
                <li>Robert W.Scott, DMD</li>
                <li>eDispatchers</li>
                <li>Sunnol Valley Country Club</li>
                <li>CORE Properties, CT</li>
                <li>Ghost City Entertainment</li>
                <li>myFanGate.com</li>
                <li>Malia Mills</li>
                <li>MAP Signage Desin + Consulting</li>
                <li>Rising Tide Capital</li>
                <li>PerDev - Perceptual Development Learning Center</li>
                <li>Nathan Henry Design</li>
                <li>Tritonic Design Agency</li>
                <li>NuHealth - Nassau Health Care Corporation</li>
                <li>Centurion Legal Firm</li>
                <li>Butler National Corporation</li>
                <li>Corner Store Magazine</li>
                <li>William L. Pegg, Jr. Attorney at Law</li>
                <li>CSS Building Services</li>
                <li>The Mall, Streets of Chester</li>
                <li>Pippi Hepburn</li>
                <li>Thai Kitchen</li>
                <li>Stride Rite</li>
                <li>Gymboree</li>
                <li>The Childrens Place</li>
                <li>White House | Black Market</li>
                <li>Talbots</li>
                <li>Justice</li>
                <li>J.Jill</li>
                <li>J.Crew</li>
                <li>Coldwater Creek</li>
                <li>Chico's</li>
                <li>Ann Taylor</li>
                <li>Jos.A.Bank</li>
                <li>Banana Republic</li>
                <li>Papyrus</li>
                <li>Fast Frame</li>
                <li>Sunglass Hut</li>
                <li>Icing</li>
                <li>Corbo Jewelers</li>
                <li>Coach</li>
                <li>Iris Tree</li>
                <li>Platypus</li>
                <li>Plow &amp; Hearth</li>
                <li>Country Curtains</li>
                <li>Elements - Therapeutic Massage</li>
                <li>Michelle Mumoli Salon</li>
                <li>Step Up Tech</li>
                <li>Insure4Sure.com</li>
                <li>NJASLA - New Jersey American Society of Landscape Architects</li>
                <li>Roblox</li>
                <li>Ask The Pilot</li>
                <li>Briarcliff Corporate Campus</li>
              </ul>
            </div>


            <!-- CONTACT -->
            <div id="contactBlock">
            	<h2>Rates</h2>
            	<p>We bill at $65 per hour, with a 1 hour minimum. We offer accurate estimates and ask for 50% upfront to start and the balance upon completion.</p>
            	<p>The typical work flow is a free consultation, a project scope outline, a first draft, review process, final draft, launch</p>

            	<p>&nbsp;</p>
            	
            	<h2>How can we help?</h2>
                <?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
            </div>

            <!-- CALL TO ACTION -->
            <a id="callToAction" class="triggerContact" href="#">LET'S START TALKING <strong>>></strong></a>


	</div><!-- content -->

</div><!-- ..container -->


<?php get_footer(); ?>