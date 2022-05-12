<?php
/**
 * About Details pattern
 */
return array(
	'title'      => __( 'Google Map Section', 'exclusive-theme' ),
	'categories' => array( 'exclusive-basic' ),
	'content'    => '
                    <!-- wp:cover {"overlayColor":"white","contentPosition":"center center","align":"full","style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} -->
                    <div class="wp-block-cover alignfull has-white-background-color has-background-dim" style="padding-top:0px;padding-bottom:0px;">
                    <div class="wp-block-cover__inner-container">
                    <!-- wp:group -->
                    <div class="wp-block-group">
                    <iframe src="https://snazzymaps.com/embed/350647" width="100%" height="600px" style="border:none;"></iframe>
                    </div><!-- /wp:group -->
                    </div>
                    </div><!-- /wp:cover -->'
);
