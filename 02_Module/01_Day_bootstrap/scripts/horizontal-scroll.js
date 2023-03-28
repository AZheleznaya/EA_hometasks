document.addEventListener("DOMContentLoaded", () => {
    const scrollContainer = document.querySelector(".nav-tabs");

    if(scrollContainer.scrollWidth > scrollContainer.clientWidth) {
        scrollContainer.addEventListener("wheel", (e) => {
            e.preventDefault();
            scrollContainer.scrollLeft += e.deltaY;
        })
    }
})