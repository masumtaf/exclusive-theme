<?php
/**
 * Default Info Boxes block pattern
 */
return array(
	'title'      => __( 'Info Boxes', 'exclusive-theme' ),
	'categories' => array( 'exclusive-basic' ),
	'content'    => '
                    <!-- wp:cover {"overlayColor":"foreground","contentPosition":"center center","align":"full","style":{"spacing":{"margin":{"top":"-200px"},"padding":{"bottom":"100px"}}}} -->
                    <div class="wp-block-cover alignfull has-foreground-background-color has-background-dim" style="margin-top:-200px;padding-bottom:100px;">
                    <div class="wp-block-cover__inner-container">

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"contentSize":"1140px"}} -->
                    <div class="wp-block-group" style="padding-top:0px;padding-bottom:0px">
                    <!-- wp:columns --><div class="wp-block-columns">
                    <!-- wp:column {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"50px","right":"40px","bottom":"50px","left":"40px"}}},"backgroundColor":"white","className":"ex-border"} -->
                    <div class="wp-block-column ex-border has-white-background-color has-background" style="border-radius:6px;padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px">

                    <!-- wp:image {"align":"center","id":151,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
                    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . 'assets/img/investment.png" alt="" class="wp-image-151" width="80" height="80"/></figure></div>
                    <!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d222a"},"spacing":{"margin":{"top":"20px"}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
                    <h2 class="has-text-align-center has-text-color" style="color:#1d222a;font-size:22px;font-style:normal;font-weight:500;margin-top:20px">Professional Advice</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","textColor":"dark"} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-weight:300;">Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    <!-- /wp:paragraph -->

                    </div><!-- /wp:column -->

                    <!-- wp:column {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"50px","right":"40px","bottom":"50px","left":"40px"}}},"backgroundColor":"white","className":"ex-border"} -->
                    <div class="wp-block-column has-white-background-color has-background ex-border" style="border-radius:6px;padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px"><!-- wp:image {"align":"center","id":147,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
                    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . 'assets/img/audit-2.png" alt="" class="wp-image-147" width="80" height="80"/></figure></div>
                    <!-- /wp:image -->
                    
                    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d222a"},"spacing":{"margin":{"top":"20px"}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
                    <h2 class="has-text-align-center has-text-color" style="color:#1d222a;font-size:22px;font-style:normal;font-weight:500;margin-top:20px">Affordable Price</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"dark","style":{"typography":{"fontWeight":"300"}}} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-weight:300;">Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    <!-- /wp:paragraph -->
                    
                    </div><!-- /wp:column -->
                    
                    <!-- wp:column {"style":{"border":{"radius":"6px"},"spacing":{"padding":{"top":"50px","right":"40px","bottom":"50px","left":"40px"}}},"backgroundColor":"white","className":"ex-border"} -->
                    <div class="wp-block-column ex-border has-white-background-color has-background" style="border-radius:6px;padding-top:50px;padding-right:40px;padding-bottom:50px;padding-left:40px"><!-- wp:image {"align":"center","id":148,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} -->
                    <div class="wp-block-image"><figure class="aligncenter size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . 'assets/img/taxation.png" alt="" class="wp-image-148" width="80" height="80"/></figure></div>
                    <!-- /wp:image -->
                    
                    <!-- wp:heading {"textAlign":"center","style":{"color":{"text":"#1d222a"},"spacing":{"margin":{"top":"20px"}},"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}}} -->
                    <h2 class="has-text-align-center has-text-color" style="color:#1d222a;font-size:22px;font-style:normal;font-weight:500;margin-top:20px">Expert Advisor</h2>
                    <!-- /wp:heading -->
                    
                    <!-- wp:paragraph {"align":"center","textColor":"dark"} -->
                    <p class="has-text-align-center has-dark-color has-text-color" style="font-weight:300;">Lorem ipsum dolor sit amet, consectet adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                    <!-- /wp:paragraph -->
                    
                    </div><!-- /wp:column -->

                    </div><!-- /wp:columns -->

                    </div><!-- /wp:group -->

                    </div>
                    </div>
                    <!-- /wp:cover -->',
);