const updateSize = () => {
    let vh = window.innerHeight * 0.01;
    let vw = document.documentElement.clientWidth * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
    document.documentElement.style.setProperty('--vw', `${vw}px`);
}

window.addEventListener("resize", updateSize);

window.addEventListener("load", () => {
    updateSize();
});

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

    Array.prototype.forEach.call(
        document.querySelectorAll('.card__description'),
        (el) => new SimpleBar(el, { autoHide: false })
    );

    Array.prototype.forEach.call(
        document.querySelectorAll('.article__description'),
        (el) => new SimpleBar(el, { autoHide: false })
    );

    const surgeonCards = document.querySelectorAll(".surgeon__image");

    surgeonCards.forEach((card) => {
        card.addEventListener("click", () => {
            card.lastElementChild.classList.toggle("show");
        })
    });

    Array.prototype.forEach.call(
        document.querySelectorAll('.surgeon-overlay__text'),
        (el) => new SimpleBar(el, { autoHide: false })
    );

});