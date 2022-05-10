<?php
/**
 * About Details pattern
 */
return array(
	'title'      => __( 'Team Section', 'exclusive-theme' ),
	'categories' => array( 'exclusive-basic' ),
	'content'    => '
                  
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"0px"}}}, "layout":{"contentSize":"860px"}} --><div class="wp-block-group" style="padding-top:100px;padding-bottom:0px">
                    <!-- wp:columns --><div class="wp-block-columns">

                    <!-- wp:column --><div class="wp-block-column">

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"forth","className":"financio-animate financio-move-up financio-delay-1","fontSize":"small"} -->
                    <h2 class="has-text-align-center financio-animate financio-move-up financio-delay-1 has-forth-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400">Our Team</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"32px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-center has-dark-color has-text-color" style="font-size:32px;font-style:normal;font-weight:500">Meet With Professional Team</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","textColor":"dark"} -->
                    <p class="has-text-align-center has-dark-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <!-- /wp:paragraph -->


                    </div><!-- /wp:column -->

                    </div><!-- /wp:columns -->
                    </div><!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"100px"}}}, "layout":{"inherit":true}} --><div class="wp-block-group" style="padding-top:40px;padding-bottom:100px">

                    <!-- wp:columns --><div class="wp-block-columns">

                    <!-- wp:column {"style":{"border":{"radius":"6px"}}} --><div class="wp-block-column ex-border" style="border-radius:6px">
                    <!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( EXSIT_URI ) . '/assets/img/african-american-afro-american-analyzing-black-people-brainstorming-1434697-pxhere.com.jpg" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-center has-dark-color has-text-color" style="font-size:22px;font-style:normal;font-weight:500">Team Member one</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"20px","bottom":"40px","right":"20px"}}},"align":"center","textColor":"dark",{"fontSize":"tiny"},"fontWeight":"300"} -->
                    <p class="has-text-align-center has-dark-color has-text-color has-tiny-font-size" style="padding-left:20px;padding-right:20px;padding-bottom:40px;font-weight:300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#05b772","iconBackgroundColorValue":"#05b772","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"20px"},"blockGap":"20px"}}} -->
                    <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:20px">
                      <!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
                      <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
                      <!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
                      <!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
                    </ul>
                      <!-- /wp:social-links -->

                    </div><!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"radius":"6px"}}} --><div class="wp-block-column ex-border" style="border-radius:6px">
                    <!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( EXSIT_URI ) . '/assets/img/african-american-afro-american-analyzing-black-people-brainstorming-1434697-pxhere.com.jpg" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-center has-dark-color has-text-color" style="font-size:22px;font-style:normal;font-weight:500">Team Member Two</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"20px","bottom":"40px","right":"20px"}}},"align":"center","textColor":"dark",{"fontSize":"tiny"},"fontWeight":"300"} -->
                    <p class="has-text-align-center has-dark-color has-text-color has-tiny-font-size" style="padding-left:20px;padding-right:20px;padding-bottom:40px;font-weight:300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#05b772","iconBackgroundColorValue":"#05b772","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"20px"},"blockGap":"20px"}}} -->
                    <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:20px">
                      <!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
                      <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
                      <!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
                      <!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
                    </ul>
                      <!-- /wp:social-links -->

                    </div><!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"radius":"6px"}}} --><div class="wp-block-column ex-border" style="border-radius:6px">
                    <!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( EXSIT_URI ) . '/assets/img/african-american-afro-american-analyzing-black-people-brainstorming-1434697-pxhere.com.jpg" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"22px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-center has-dark-color has-text-color" style="font-size:22px;font-style:normal;font-weight:500">Team Member Three</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"style":{"spacing":{"padding":{"left":"20px","bottom":"40px","right":"20px"}}},"align":"center","textColor":"dark",{"fontSize":"tiny"},"fontWeight":"300"} -->
                    <p class="has-text-align-center has-dark-color has-text-color has-tiny-font-size" style="padding-left:20px;padding-right:20px;padding-bottom:40px;font-weight:300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","customIconBackgroundColor":"#05b772","iconBackgroundColorValue":"#05b772","size":"has-normal-icon-size","className":"is-style-default","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"20px"},"blockGap":"20px"}}} -->
                    <ul class="wp-block-social-links has-normal-icon-size has-icon-color has-icon-background-color is-style-default" style="margin-top:20px">
                      <!-- wp:social-link {"url":"https://facebook.com","service":"facebook"} /-->
                      <!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
                      <!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
                      <!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
                    </ul>
                      <!-- /wp:social-links -->

                    </div><!-- /wp:column -->

                    </div><!-- /wp:columns -->
                    </div><!-- /wp:group -->
                    
                    
                    
                    
                    ',
);