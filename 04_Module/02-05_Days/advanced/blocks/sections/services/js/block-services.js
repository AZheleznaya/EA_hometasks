/**
 * Internal Dependencies
 */
import { initScript } from '../../../../resources/js/utils/init-script'

const init = function( section ) {
	const scrollContainer = section.querySelector(".nav-tabs");

	if(scrollContainer.scrollWidth > scrollContainer.clientWidth) {
		scrollContainer.addEventListener("wheel", (e) => {
			e.preventDefault();
			scrollContainer.scrollLeft += e.deltaY;
		})
	};
}

initScript( '.section__services', 'services', init )
