document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".swiper-container", {
        spaceBetween: 60,
        slidesPerView: 3,
        loop: true,
        speed: 1000,
        centeredSlides: true,
        effect: "coverflow",
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            modified: 0,
            depth: 10,
            scale: 1.1,
            slideShadows: false,
        },
        grabCursor: true,
    });
})