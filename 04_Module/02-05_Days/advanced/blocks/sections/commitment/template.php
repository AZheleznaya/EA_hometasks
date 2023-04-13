<?php
/**
 * Block Commitment.
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

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<?php
			if( have_rows('commitment_cards') ):
?>
<section class="section__commitment">
	<div class="container">
		<div class="commitment-title">
			<h1>
				<?= get_field( "commitment_title" ); ?>
			</h1>
		</div>
		<div class="row d-flex justify-content-center">

		<?php
			if( have_rows('commitment_cards') ):
				while( have_rows('commitment_cards') ) : the_row();
		?>

			<div class="col-12 col-lg-10 col-xl-6 col-xxl-4 ">
				<div class="card">
					<div class="card__image">
						<?php the_sub_field('commitment_card_image'); ?>
					</div>
					<div class="card__title">
						<h4>
							<?php the_sub_field('commitment_card_title'); ?>
						</h4>
					</div>
					<div class="card__description text-content simple-scroll">
						<p>
							<?php the_sub_field('commitment_card_text'); ?>
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
