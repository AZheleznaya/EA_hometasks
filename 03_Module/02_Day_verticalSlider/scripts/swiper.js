document.addEventListener("DOMContentLoaded", () => {
    const swiperLeft = new Swiper(".swiper-container__left", {
        direction: "vertical",
        slidesPerView: 3,
        watchSlidesProgress: true,
        autoHeight: true,
        grabCursor:true,
    })

    const swiperRight = new Swiper(".swiper-container__right", {
        direction: "vertical",
        thumbs: {
            swiper: swiperLeft,
        },
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
            clickable: true,
            hide: false,
        },
        grabCursor:true,
    })

    swiperRight.controller.control = swiperLeft;
})