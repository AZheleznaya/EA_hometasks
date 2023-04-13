<?php
/**
 * Block Surgeons.
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

<?php
	if( have_rows('surgeons') ):
?>

<section class="section__surgeons">
	<div class="container">
		<div class="surgeons">
			<div class="surgeons__subtitle">
				<h4>
					<?= get_field( "surgeons_subtitle" ); ?>
				</h4>
			</div>
			<div class="surgeons__title">
				<h1>
					<?= get_field( "surgeons_title" ); ?>
				</h1>
			</div>
			<div class="surgeons__description">
				<p class="description__text">
					<?= get_field( "surgeons_description" ); ?>
				</p>
			</div>
			<div class="row justify-content-center row-surgeons">

			<?php
				if( have_rows('surgeons') ):
					while( have_rows('surgeons') ) : the_row();
			?>
				<div class="col-12 col-md-4 col-lg-3 col-xl-3">
					<div class="surgeon__image">
						<img src="<?php the_sub_field( 'surgeon_image' )?>" alt="surgeon-image">
						<div class="surgeon-overlay">
							<h4 class="surgeon-overlay__title">
								<?php the_sub_field('surgeon_name'); ?>
							</h4>
							<div class="surgeon-overlay__arrow">
								<img src="<?= get_theme_file_uri( '/dist/images/myImages/surgeon_arrow.svg' )?>" alt="surgeon-arrow">
							</div>
							<p class="surgeon-overlay__text simple-scroll">
								<?php the_sub_field('surgeon_text'); ?>
							</p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>

            <?php endif; ?>
		</div>
	</div>
</section>

<?php endif; ?>
