/**
 * Internal Dependencies
 */

import { initScript } from '../../../../resources/js/utils/init-script'

const init = function( section ) {
	const menu = section.querySelector(".header__desktop");
	const closeBackground = section.querySelector(".header__close");
	const menuButton = section.querySelector(".mobile-menu");
	const closeMenuCross = section.querySelector(".header__close-icon");

	if(menuButton) {
		menuButton.addEventListener("click", () => {
			closeBackground.classList.add("active");
			menu.classList.add("active");
			document.body.classList.add("scroll-off");

		})
	}

	if(closeMenuCross) {
		closeMenuCross.addEventListener("click", () => {
			closeBackground.classList.remove("active");
			menu.classList.remove("active");
			document.body.classList.remove("scroll-off");
		})
	}
}

initScript( '.header', 'header', init )

