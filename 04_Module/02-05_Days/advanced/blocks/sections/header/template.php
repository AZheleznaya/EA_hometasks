<?php
/**
 * Block Header.
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

<header class="header">
	<div class="header__desktop">
		<div class="header-scrollbar simple-scroll">
			<div class="header__desktop-content">
				<a class="header-logo" href="javascript:void(0);" target="_blank">
					<img class="header-logo__image" src="<?= get_theme_file_uri( '/dist/images/myImages/a-logo.svg' )?>" alt="logo">
				</a>
				<div class="header-menu">
					<ul class="menu">
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Home</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">About Us</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Locations</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">I’m New</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Procedures</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Before and After</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Testimonials</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Resources</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Financing</a>
						</li>
						<li class="menu__item">
							<a class="menu__item-link" href="javascript:void(0);">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="header-button">
					<a class="header-button__phone" href="tel:+4047375803" role="button">(404) 737-5803</a>
				</div>
			</div>
		</div>
	</div>
	<div class="header__close">
		<button class="header__close-icon">
		 	<img src="<?= get_theme_file_uri( '/dist/images/myImages/close-icon.svg' )?>" alt="closeIcon">
		</button>
	</div>
	<div class="header__mobile">
		<div class="header__mobile-content">
			<button class="mobile-menu">
				<img src="<?= get_theme_file_uri( '/dist/images/myImages/menu-icon.svg' )?>" alt="mobileMenu">
			</button>
			<a class="mobile-logo" href="javascript:void(0);" target="_blank">
				<img class="logo__image" src="<?= get_theme_file_uri( '/dist/images/myImages/a-logo.svg' )?>" alt="logo">
			</a>
			<a class="mobile-button" href="tel:+44047375803" role="button">
				<span class="mobile-button__phone">(404) 737-5803</span>
				<span class="mobile-button__icon">
					<img src="<?= get_theme_file_uri( '/dist/images/myImages/phone.svg' )?>" alt="phone">
				</span>
			</a>
		</div>
	</div>
</header>
