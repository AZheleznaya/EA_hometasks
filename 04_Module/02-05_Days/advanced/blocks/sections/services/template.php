<?php
/**
 * Block Services.
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

<section id="services" class="section__services">
	<div class="container">
		<div class="services">
			<div class="row align-items-center">
				<div class="col-12 col-xl-6">
					<div class="services__article">
						<div class="article__subtitle">
							<h4>
								<?= get_field( "services_subtitle" ); ?>
							</h4>
						</div>
						<div class="article__title">
							<h2>
								<?= get_field( "services_title" ); ?>
							</h2>
						</div>
						<div class="article__description text-content simple-scroll">
							<p>
								<?= get_field( "services_description" ); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-xl-6">
					<div class="services__tab">
						<div class="tabs">
							<ul class="nav nav-tabs">
								<?php
									$index = 1;
									if( have_rows('services_tabs') ):
										while( have_rows('services_tabs') ) : the_row();
								?>
									<li class="nav-item">
										<a
											class="nav-link <?= $index === 1 ? 'active' : '' ?>"
											href="#nav-<?= $index ?>"
											data-toggle="tab"
											role="tab"
										>
											<?php the_sub_field('services_tab_name'); ?>
										</a>
									</li>
								<?php $index++; ?>

								<?php endwhile; ?>

								<?php endif; ?>

							</ul>
						</div>
						<div class="tab-content">

							<?php
								$index = 1;
								if( have_rows('services_tabs_content') ):
									while( have_rows('services_tabs_content') ) : the_row();
							?>
								<div class="tab-pane fade <?= $index === 1 ? 'active show' : '' ?>" id="nav-<?= $index ?>">
									<div class="row">
										<?php
											if( have_rows('services_tab_pane_name') ):
												while( have_rows('services_tab_pane_name') ) : the_row();
										?>
											<div class="col-6 col-md-4 col-xxl-4">
												<span class="tab__name">
													<?php the_sub_field('services_tab_pane_content'); ?>
												</span>
											</div>
										<?php endwhile; ?>

										<?php endif; ?>
									</div>
								</div>
							<?php $index++; ?>

							<?php endwhile; ?>

							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
