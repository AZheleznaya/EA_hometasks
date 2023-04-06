document.addEventListener("DOMContentLoaded", () => {
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
        }
    })
})