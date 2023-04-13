/**
 * Internal Dependencies
 */

import { initScript } from '../../../../resources/js/utils/init-script'

const init = function( section ) {
	const surgeonCards = section.querySelectorAll(".surgeon__image");

	surgeonCards.forEach((card) => {
		card.addEventListener("click", () => {
			card.lastElementChild.classList.toggle("show");
		})
	});
}

initScript( '.section__surgeons', 'surgeons', init )
