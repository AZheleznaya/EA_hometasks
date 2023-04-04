document.addEventListener("DOMContentLoaded", () => {
    new Splide('.splide', {
        type: 'loop',
        perPage: 3,
        perMove: 1,
        drag: true,
        gap: "20px",
        updateOnMove: true,
        flickMaxPages: 1,
        focus: 'center',
        arrows: false,
        pagination: false,
    }).mount();
})