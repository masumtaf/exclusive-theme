<?php
/**
 * About Details pattern
 */
return array(
	'title'      => __( 'About Info', 'exclusive-theme' ),
	'categories' => array( 'exclusive-basic' ),
	'content'    => '
    
                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px"}}}, "layout":{"inherit":true}} --><div class="wp-block-group" style="padding-top:100px;padding-bottom:100px">
                    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} --><div class="wp-block-columns alignwide are-vertically-aligned-center">

                    <!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"forth","className":"financio-animate financio-move-up financio-delay-1","fontSize":"small"} -->
                    <h2 class="has-text-align-left financio-animate financio-move-up financio-delay-1 has-forth-color has-text-color has-small-font-size" style="font-style:normal;font-weight:400">About Us</h2>
                    <!-- /wp:heading -->

                    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"32px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-left has-dark-color has-text-color" style="font-size:32px;font-style:normal;font-weight:500">About Our Company</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"dark"} -->
                    <p class="has-text-align-left has-dark-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:columns --><div class="wp-block-columns">

                    <!-- wp:column --><div class="wp-block-column">
                    <!-- wp:image {"align":"left","id":145,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} --><div class="wp-block-image">
					<figure class="alignleft size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . '/assets/img/audit-2.png" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '" class="wp-image-145" width="80" height="80"/></figure> </div>
					<!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-left has-dark-color has-text-color" style="font-size:20px;font-style:normal;font-weight:500">Our Mission</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"dark",{"fontSize":"tiny"}} -->
                    <p class="has-text-align-left has-dark-color has-text-color has-tiny-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <!-- /wp:paragraph -->

                    </div><!-- /wp:column -->

                    <!-- wp:column --><div class="wp-block-column">

                    <!-- wp:image {"align":"left","id":145,"width":80,"height":80,"sizeSlug":"full","linkDestination":"none"} --><div class="wp-block-image">
					<figure class="alignleft size-full is-resized"><img src="' . esc_url( EXSIT_URI ) . '/assets/img/investment.png" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '" class="wp-image-145" width="80" height="80"/></figure> </div>
					<!-- /wp:image -->

                    <!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"20px"}},"textColor":"dark"} -->
                    <h2 class="has-text-align-left has-dark-color has-text-color" style="font-size:20px;font-style:normal;font-weight:500">Our Vission</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"left","textColor":"dark",{"fontSize":"tiny"}} -->
                    <p class="has-text-align-left has-dark-color has-text-color has-tiny-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <!-- /wp:paragraph -->

                    </div><!-- /wp:column -->

                    </div><!-- /wp:columns -->

                    </div><!-- /wp:column -->

                    <!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:image {"sizeSlug":"large"} -->
					<figure class="wp-block-image size-large"><img src="' . esc_url( EXSIT_URI ) . '/assets/img/african-american-afro-american-analyzing-black-people-brainstorming-1434697-pxhere.com.jpg" alt="' . esc_attr__( 'Illustration of a bird sitting on a branch.', 'twentytwentytwo' ) . '"/></figure>
					<!-- /wp:image -->

                    </div><!-- /wp:column -->

                    </div><!-- /wp:columns -->
                    </div><!-- /wp:group -->',
);