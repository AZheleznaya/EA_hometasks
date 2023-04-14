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

	const anchors = document.querySelectorAll('a[href*="#"]')

	for (let anchor of anchors) {
		anchor.addEventListener('click', function (e) {
			e.preventDefault()

			const blockID = anchor.getAttribute('href').substr(1)

			document.getElementById(blockID).scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			})
		})
	}

	document.querySelectorAll('.menu-item').forEach((currentItem,index,items)=>{
		currentItem.addEventListener('click',()=>{
			items.forEach((item)=> item.classList.remove('active'));
			currentItem.classList.add('active');
		})
	})

	const menuLinks = document.querySelectorAll(".menuItem");
	menuLinks.addEventListener("click", function() {
		this.classList.toggle("active");
	});
}

initScript( '.header', 'header', init )

