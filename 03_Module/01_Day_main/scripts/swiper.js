document.addEventListener("DOMContentLoaded", () => {
    new Swiper(".swiper-container", {
        spaceBetween: 30,
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique',
        },
        pagination: {
            el: ".swiper-pagination-unique",
            type: "fraction",
        }
    })
})