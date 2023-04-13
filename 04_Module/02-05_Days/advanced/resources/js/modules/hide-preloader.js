const hidePreloader = (() => {
	const preloader = document.querySelector(".preloader");
	const body = document.querySelector("body");

	setTimeout(() => {
		preloader.classList.add("hidden");
	}, 3000)

	return () => {
		if (preloader.classList.contains("hidden")) {
			return;
		}

		body.classList.remove("has-preloader");

		preloader.classList.add("is-visually-hidden");
		preloader.addEventListener(
			"transitionend",
			function (e) {
				preloader.classList.add("hidden");
			},
			{
				capture: false,
				once: true,
				passive: false,
			}
		);
	};
})();

setTimeout(hidePreloader, 5000);

window.addEventListener("load", () => {
	hidePreloader();
});
