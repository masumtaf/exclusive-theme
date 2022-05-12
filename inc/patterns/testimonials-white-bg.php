<?php
/**
 * Default Testimonials White Section block pattern
 */
return array(
	'title'      => __( 'Testimonials Section', 'exclusive-theme' ),
	'categories' => array( 'exclusive-basic' ),
	'content'    => '
                    <!-- wp:cover {"overlayColor":"white","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}} -->
                    <div class="wp-block-cover alignfull has-white-background-color has-background-dim" style="padding-top:100px;padding-bottom:100px;">
                    <div class="wp-block-cover__inner-container">

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"backgroundColor":"0oBneR","layout":{"wideSize":"1140px","contentSize":"860px"}} -->

                    <div class="wp-block-group has-0-o-bne-r-background-color has-background" style="padding-top:0px;padding-bottom:0px"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"primary","fontSize":"small"} -->
                    <h2 class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400">Testimonials</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"32px"}},"textColor":"primary"} -->
                    <h2 class="has-text-align-center has-primary-color has-text-color" style="font-size:32px;font-style:normal;font-weight:600">What People Say About Us</h2>
                    <!-- /wp:heading -->

                    <!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column -->
                    <div class="wp-block-column"><!-- wp:group {"layout":{"contentSize":"660px"}} -->
                    <div class="wp-block-group"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"left":"70px","right":"70px"}}}} -->
                    <div class="wp-block-column" style="padding-right:70px;padding-left:70px"><!-- wp:paragraph {"align":"center","textColor":"dark","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}}} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-style:normal;font-weight:300">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <!-- /wp:paragraph --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns --></div>
                    <!-- /wp:group --></div>
                    <!-- /wp:column --></div>
                    <!-- /wp:columns -->
                    </div>
                    <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    </div>

                    <!-- /wp:group -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"contentSize":"1140px"}} -->
                    <div class="wp-block-group" style="padding-top:0px;padding-bottom:0px"><!-- wp:columns -->
                    <div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","right":"40px","bottom":"50px","left":"40px"}}},"backgroundColor":"white","className":"ex-border"} -->
                    <div class="wp-block-column ex-border has-white-background-color has-background" style="padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px">

                    <!-- wp:image {"align":"center","id":151,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-rounded"} -->
                    <div class="wp-block-image is-style-rounded" style="border-radius:100px"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . 'assets/img/view-tech-about-team-img-3.png" alt="" class="wp-image-151" width="120" height="120"/></figure></div>
                    <!-- /wp:image -->

                    <!-- wp:paragraph {"align":"center","textColor":"dark"} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-weight:300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d222a"},"spacing":{"margin":{"top":"20px"}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
                    <h2 class="has-text-align-center has-text-color" style="color:#1d222a;font-size:22px;font-style:normal;font-weight:500;margin-top:20px">John Doe</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary","fontSize":"tiny"} -->
                    <h2 class="has-text-align-center has-primary-color has-text-color has-tiny-font-size" style="font-style:normal;font-weight:300">Marketing</h2>
                    <!-- /wp:heading -->

                    </div><!-- /wp:column -->

                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","right":"40px","bottom":"50px","left":"40px"}}},"backgroundColor":"white","className":"ex-border"} -->
                    <div class="wp-block-column has-white-background-color has-background ex-border" style="padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px"><!-- wp:image {"align":"center","id":147,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-rounded"} -->
                    <div class="wp-block-image is-style-rounded" style="border-radius:100px"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . 'assets/img/view-tech-about-team-img-7.png" alt="" class="wp-image-147" width="120" height="120"/></figure></div>
                    <!-- /wp:image -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"dark","style":{"typography":{"fontWeight":"300"}}} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-weight:300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d222a"},"spacing":{"margin":{"top":"20px"}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
                    <h2 class="has-text-align-center has-text-color" style="color:#1d222a;font-size:22px;font-style:normal;font-weight:500;margin-top:20px">Jennifer Doe</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary","fontSize":"tiny"} -->
                    <h2 class="has-text-align-center has-primary-color has-text-color has-tiny-font-size" style="font-style:normal;font-weight:300">Consultant</h2>
                    <!-- /wp:heading -->

                  </div><!-- /wp:column -->
                    
                    <!-- wp:column {"style":{"spacing":{"padding":{"top":"50px","right":"40px","bottom":"50px","left":"40px"}}},"backgroundColor":"white","className":"ex-border"} -->
                    <div class="wp-block-column ex-border has-white-background-color has-background" style="padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px"><!-- wp:image {"align":"center","id":148,"width":120,"height":120,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}},"className":"is-style-rounded"} -->
                    <div class="wp-block-image is-style-rounded" style="border-radius:100px"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . 'assets/img/view-tech-about-team-img-5.png" alt="" class="wp-image-148" width="120" height="120"/></figure></div>
                    <!-- /wp:image -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"dark"} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-weight:300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- /wp:paragraph -->
                    
                    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d222a"},"spacing":{"margin":{"top":"20px"}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
                    <h2 class="has-text-align-center has-text-color" style="color:#1d222a;font-size:22px;font-style:normal;font-weight:500;margin-top:20px">Claudia Doe</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"300"}},"textColor":"primary","fontSize":"tiny"} -->
                    <h2 class="has-text-align-center has-primary-color has-text-color has-tiny-font-size" style="font-style:normal;font-weight:300">Marketing</h2>
                    <!-- /wp:heading -->

                   </div><!-- /wp:column -->

                    </div><!-- /wp:columns -->

                    </div><!-- /wp:group -->

                    </div>
                    </div>
                    <!-- /wp:cover -->',
);
