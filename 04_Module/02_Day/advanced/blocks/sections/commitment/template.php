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

<section class="section__commitment">
	<div class="container">
		<div class="commitment-title">
			<h1>The Advanced Commitment</h1>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-12 col-lg-10 col-xl-6 col-xxl-4 ">
				<div class="card">
					<div class="card__image">
						<lottie-player class="image-lottie" src="https://lottie.host/ba39c2ee-c890-4d68-9309-88ea3b855b6e/zCMVnglzix.json" background="transparent" speed="1" loop autoplay></lottie-player>
					</div>
					<div class="card__title">
						<h4>Patient-Focused Care</h4>
					</div>
					<div class="card__description text-content simple-scroll">
						<p>
							Our mission is to help our Texas patients choose the right treatments to achieve their goals, deliver a comfortable and rewarding treatment experience, and restore your confidence by producing consistently dramatic, natural-looking, and stunning results.
						</p>
						<p>
							Our mission is to help our Texas patients choose the right treatments to achieve their goals, deliver a comfortable and rewarding treatment experience, and restore your confidence by producing consistently dramatic, natural-looking, and stunning results.
						</p>
						<p>
							Our mission is to help our Texas patients choose the right treatments to achieve their goals, deliver a comfortable and rewarding treatment experience, and restore your confidence by producing consistently dramatic, natural-looking, and stunning results.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-10 col-xl-6 col-xxl-4 ">
				<div class="card">
					<div class="card__image">
						<lottie-player class="image-lottie" src="https://lottie.host/aa49eb27-704b-418d-8995-4f69202b7d3f/9UFhTSrwLR.json" background="transparent" speed="1" loop autoplay></lottie-player>
					</div>
					<div class="card__title">
						<h4>Fully Accredited Surgical Center</h4>
					</div>
					<div class="card__description text-content simple-scroll">
						<p>
							Our private, state-of-the-art surgical suite meets the highest safety standards in the industry and is accredited by the American Association for Accreditation of Ambulatory Surgery Facilities (AAAASF).
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-10 col-xl-6 col-xxl-4 ">
				<div class="card">
					<div class="card__image">
						<lottie-player class="image-lottie" src="https://lottie.host/b590dff2-6bac-4f24-accf-5171753092ea/UO1IZwHfGG.json" background="transparent" speed="1" loop autoplay></lottie-player>
					</div>
					<div class="card__title">
						<h4>Advanced Technology</h4>
					</div>
					<div class="card__description text-content simple-scroll">
						<p>
							Our surgeon uses the latest technology and state-of-the-art techniques so we can produce the best possible results. From the full range of breast implant options to non-invasive injectable treatments, we can enhance your appearance safely and comfortably.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
