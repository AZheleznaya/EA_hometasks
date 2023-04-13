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

/**
 * Block Variables
 */
$button = get_field( 'hero_button' );

$buttonLink = get_field('hero_button_link');
?>

<section class="section__hero">
	<div class="background-img">
		<img src="<?= get_field( 'hero_background' ); ?>" alt="hero">
	</div>
	<div class="hero__content">
		<div class="container">
			<h1 class="hero__content-title">
				<?= get_field( "hero_title" ); ?>
			</h1>
			<div class="hero__content-text">
				<?= get_field( "hero_description" ); ?>
			</div>
			<h5 class="hero__content-subtitle">
				<?= get_field( "hero_subtitle" ); ?>
			</h5>

			<?php if ( 'link' === $button ) : ?>

				<?php if ( $buttonLink ) :
					$buttonLink_url = $buttonLink['url'];
					$buttonLink_title = $buttonLink['title'] ? $buttonLink['title'] : 'Schedule now';
					$buttonLink_target = $buttonLink['target'] ? $buttonLink['target'] : '_self';
				?>
					<a class="button hero__content-button" href="<?= $buttonLink_url; ?>" type="button" target="<?= $buttonLink_target; ?>">
						<?= $buttonLink_title; ?>
					</a>
				<?php endif; ?>

			<?php elseif ( 'modal' === $button ) : ?>
				<button class="button hero__content-button" type="button" data-toggle="modal" data-target="#modal-request">
					<?= get_field( "hero_button_text" ); ?>
				</button>

			<?php endif; ?>
		</div>
	</div>

	<div class="modal fade show" id="modal-request" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<button class="modal-close" type="button" data-dismiss="modal" aria-label="Close">
						<img src="<?= get_theme_file_uri( '/dist/images/myImages/close-modal.svg' )?>" alt="closeIcon">
					</button>
				</div>
				<div class="modal-body">
					<div class="modal-form">
						<?= do_shortcode( '[ninja_form id=2]' ) ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
