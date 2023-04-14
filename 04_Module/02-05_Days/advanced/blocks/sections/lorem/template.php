<?php
/**
 * Block Lorem.
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
$button = get_field( 'lorem_button' );

$buttonLink = get_field('lorem_button_link');
?>

<section id="lorem" class="section__lorem">
	<div class="container">
		<div class="lorem">
			<div class="row">
				<div class="col-12 col-lg-6">
					<div class="lorem__image">
						<img src="<?= the_field( 'lorem_image' ); ?>" alt="lorem-image">
					</div>
				</div>
				<div class="col-12 col-lg-6 align-self-center">
					<div class="lorem__paragraph">
						<div class="paragraph__title">
							<h2>
								<?= get_field( "lorem_title" ); ?>
							</h2>
						</div>
						<div class="paragraph__description text-content">
							<p>
								<?= get_field( "lorem_description" ); ?>
							</p>
						</div>
						<div class="collapse" id="collapse-lorem">
							<div class="paragraph__description text-content">
								<?= get_field( "lorem_collapse_text" ); ?>
							</div>
						</div>

						<?php if ( 'button' === $button ) : ?>
							<button
								class="paragraph__button"
								data-target="#collapse-lorem"
								data-toggle="collapse"
								role="button"
								aria-expanded="false"
								aria-controls="collapse-lorem"
							>
								<?= get_field( "lorem_button_text" ); ?>
							</button>
						<?php elseif ( 'link' === $button ) : ?>

							<?php if ( $buttonLink ) :
								$buttonLink_url = $buttonLink['url'];
								$buttonLink_title = $buttonLink['title'] ? $buttonLink['title'] : 'Link button';
								$buttonLink_target = $buttonLink['target'] ? $buttonLink['target'] : '_self';
							?>
								<a class="paragraph__button" href="<?= $buttonLink_url; ?>" type="button" target="<?= $buttonLink_target; ?>">
									<?= $buttonLink_title; ?>
								</a>
							<?php endif; ?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
