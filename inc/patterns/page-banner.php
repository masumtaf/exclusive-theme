<?php
/**
 * Default Page Banner block pattern
 */
return array(
	'title'      => __( 'Page Banner', 'exclusive-theme' ),
	'categories' => array( 'exclusive-basic' ),
	'content'    => '
                    <!-- wp:cover {"url":"' . esc_url( EXSIT_URI ) . 'assets/img/achievement-analysis-brainstorming-business-business-plan-caucasian-1448601-pxhere.com.jpg","id":27,"dimRatio":80,"overlayColor":"black","focalPoint":{"x":"0.48","y":0.51},"minHeight":450,"minHeightUnit":"px","style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}}} -->
                    <div class="wp-block-cover" style="padding-top:40px;padding-bottom:40px;min-height:450px"><span aria-hidden="true" class="has-black-background-color has-background-dim-80 wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-27" alt="" src="' . esc_url( EXSIT_URI ) . 'assets/img/achievement-analysis-brainstorming-business-business-plan-caucasian-1448601-pxhere.com.jpg" style="object-position:48% 51%" data-object-fit="cover" data-object-position="48% 51%"/><div class="wp-block-cover__inner-container">

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"0oBneR","layout":{"wideSize":"1140px","contentSize":""}} -->
                    <div class="wp-block-group has-0-o-bne-r-background-color has-background" style="padding-top:20px;padding-bottom:20px"><!-- wp:columns -->
                    <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">

                    </div><!-- /wp:column -->
                    </div><!-- /wp:columns -->
                    </div><!-- /wp:group -->
                    </div>
                    </div><!-- /wp:cover -->',
);