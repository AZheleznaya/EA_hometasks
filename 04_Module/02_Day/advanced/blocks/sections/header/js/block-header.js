/**
 * Internal Dependencies
 */
window.addEventListener("DOMContentLoaded", () => {
	const menu = document.querySelector(".header__desktop");
	const closeBackground = document.querySelector(".header__close");
	const menuButton = document.querySelector(".mobile-menu");
	const closeMenuCross = document.querySelector(".header__close-icon");

	if(menuButton) {
		menuButton.addEventListener("click", () => {
			closeBackground.classList.add("active");
			menu.classList.add("active");
			document.body.style.overflow = "hidden";

		})
	}

	if(closeMenuCross) {
		closeMenuCross.addEventListener("click", () => {
			closeBackground.classList.remove("active");
			menu.classList.remove("active");
			document.body.style.overflow = "";
		})
	}
});
