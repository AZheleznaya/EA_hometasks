<?php
/**
 * Block Faq.
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

<section id="faq" class="section__faq">
	<div class="container">
		<div class="faq__title">
			<h2>
				<?= get_field( "faq_title" ); ?>
			</h2>
		</div>

		<div class="faq-tabs">
			<div class="row">
				<div class="col-12 col-xl-6">
					<ul class="nav nav-tabs faq-tabs__list list--unstyled" role="tablist">
						<?php
							$index = 1;
							if( have_rows('faq_tabs') ):
								while( have_rows('faq_tabs') ) : the_row();
						?>
							<li class="faq-tabs__point">
								<a class="point-link <?= $index === 1 ? 'active' : '' ?>"
								   id="link-tab-<?= $index ?>"
								   href="#tab-<?= $index ?>"
								   data-toggle="tab"
								   role="tab"
								   aria-controls="tab-<?= $index ?>"
								   aria-selected="<?= $index === 1 ? 'true' : 'false' ?>"
								>
									<?php the_sub_field('faq_tab'); ?>
								</a>
							</li>
						<?php $index++; ?>

                       	<?php endwhile; ?>

                       	<?php endif; ?>
					</ul>
				</div>

				<div class="col-12 col-xl-6">
					<div class="tab-content">
						<?php
							$index = 1;
							if( have_rows('faq_tab_content') ):
								while( have_rows('faq_tab_content') ) : the_row();
						?>
							<div
								class="tab-pane fade <?= $index === 1 ? 'active show' : '' ?>"
								id="tab-<?= $index ?>"
								role="tabpanel"
								aria-labelledby="faq-tab-<?= $index ?>"
							>
								<div class="faq-content">
									<div class="faq-content__question">
										<h4>
											<?php the_sub_field('faq_tab_question'); ?>
										</h4>
									</div>
									<div class="faq-content__answer text-content simple-scroll">
										<?php the_sub_field('faq_tab_answer'); ?>
									</div>
								</div>
							</div>
						<?php $index++; ?>

						<?php endwhile; ?>

						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>

		<div class="faq-collapse" id="collapseBlock">
			<?php
				$index = 1;
				if( have_rows('faq_collapse') ):
					while( have_rows('faq_collapse') ) : the_row();
			?>
				<div class="faq-collapse__item">
					<a
						class="collapse-link"
						id="link-collapse-<?= $index ?>"
						href="#collapse-<?= $index ?>"
						data-toggle="collapse"
						aria-controls="collapse-<?= $index ?>"
						aria-expanded="<?= $index === 1 ? 'true' : 'false' ?>"
					>
						<?php the_sub_field('collapse_link'); ?>
					</a>
					<div
						class="collapse <?= $index === 1 ? 'show' : '' ?>"
						id="collapse-<?= $index ?>"
						aria-labelledby="link-collapse-<?= $index ?>"
						data-parent="#collapseBlock"
					>
						<div class="faq-content">
							<div class="faq-content__question">
								<h4>
									<?php the_sub_field('collapse_question'); ?>
								</h4>
							</div>
							<div class="faq-content__answer text-content simple-scroll">
								<?php the_sub_field('collapse_answer'); ?>
							</div>
						</div>
					</div>
				</div>
			<?php $index++; ?>

			<?php endwhile; ?>

			<?php endif; ?>
		</div>
	</div>
</section>
