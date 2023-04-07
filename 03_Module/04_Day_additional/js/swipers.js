document.addEventListener("DOMContentLoaded", () => {

    const tabs = [...document.querySelectorAll(".tab-pane")];
    
    for (const tab of tabs) {
        tab.classList.add("active");
    }

    new Swiper(".swiper-container", {
        loop: true,
        loopedSlides: 2,
        speed: 300,
        allowTouchMove: false,
        centeredSlides: true,
        slidesPerView: "auto",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    })

    for (const tab of tabs) {
        tab.classList.remove("active");
    }

    tabs[0].classList.add("active");
})