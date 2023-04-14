<?php
/**
 * Block Gallery.
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

<section id="gallery" class="section__gallery">
	<div class="container">
		<div class="gallery-title">
			<h1>
				<?= get_field( "gallery_title" ); ?>
			</h1>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="gallery-list">

					<?php
						if( have_rows('gallery_list') ):
							while( have_rows('gallery_list') ) : the_row();
					?>
						<div class="gallery-list__item">
							<a class="gallery-list__item gallery-list__item_image" href="javascript:void(0);">
								<img src="<?= the_sub_field('gallery_image'); ?>" alt="image">
								<span class="item-name">
									<?php the_sub_field('gallery_description'); ?>
								</span>
							</a>
						</div>
					<?php endwhile; ?>

                    <?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</section>
