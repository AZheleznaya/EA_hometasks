<?php

add_action( 'wp_body_open', 'hm_custom_body_content' );
function hm_custom_body_content() {
	?>

	<div class="preloader" aria-hidden="true">
		<div class="preloader">
                <div class="preloader__circle"></div>
        </div>
	</div>

	<?php
}
