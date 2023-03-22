function setPlay() {
    const videoDesktop = document.querySelector(".video-desktop");
    const videoMobile = document.querySelector(".video-mobile");

    if (window.innerWidth > 560) {
        videoDesktop.play()
    } else {
        videoMobile.play()
    }
}

setPlay();

window.addEventListener("resize", () => {
    setPlay();
})
