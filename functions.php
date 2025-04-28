<?php

/**
 * Digital Data
 */
add_action('wp_head', 'addDigitalDataToHead');

function addDigitalDataToHead(){
	?>
	<script type='text/javascript'>
	var digitalData = {
		page: {
			category: { 
				brand: 'UP',
				primaryCategory: 'stay', 
				siteName: '<?php echo str_replace(" ","-", strtolower( get_bloginfo() )); ?>', 
				siteType: 'L',
			},
			pageInfo: { 
				destinationURL: '<?php global $wp; echo get_site_url(); echo add_query_arg( home_url( $wp->request ) ); ?>', 
				language: 'en_US', 
				pageName: '<?php echo str_replace(" ","-", strtolower( get_bloginfo() ));?>:<?php echo trim( add_query_arg( home_url( $wp->request ) ), "/" ); ?>', 
				pageTitle: '<?php echo wp_title(''); ?>'
			}
		}, 
		product:[{ productInfo:{ productID: 'FTWMTUP' } }], 
	};
	</script>
	<?php
};
