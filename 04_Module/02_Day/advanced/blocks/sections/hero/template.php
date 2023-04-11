<?php
/**
 * Block Hero.
 *
 * @var array $block The block settings and attributes.
 * @var string $content The block inner HTML (empty).
 * @var bool $is_preview True during AJAX preview.
 * @var $post_id (int|string) The post ID this block is saved to.
 */

/**
 * Block preview image
 */
if ( isset( $block['data']['block_preview_images'] ) ) {
	hm_get_template_part_with_params( 'fragments/block-preview-image', ['block' => $block] );
	return;
}
?>

<section class="section__hero">
	<div class="background-img">
		<img src="<?= get_theme_file_uri( '/dist/images/myImages/hero.png' )?>" alt="closeIcon">
	</div>
	<div class="hero__content">
		<div class="container">
			<h1 class="hero__content-title">State of the art surgery center</h1>
			<div class="hero__content-text">Achieve your most beautiful self</div>
			<h5 class="hero__content-subtitle">Schedule complimentary Cosmetic Consultation</h5>
			<button class="button hero__content-button" type="button">
				Schedule now
			</button>
		</div>
	</div>
</section>
