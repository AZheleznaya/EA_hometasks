document.addEventListener("DOMContentLoaded", () => {
    const swiper = new Swiper(".swiper-container", {
        allowTouchMove: false,
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique',
        },
        pagination: {
            el: ".swiper-pagination-unique",
            clickable: true,
        }
    });

    document.querySelector(".swiper-button-next-unique").onclick = () => pauseVideos();
    document.querySelector(".swiper-button-prev-unique").onclick = () => pauseVideos();
    document.querySelector(".swiper-pagination-unique").onclick = () => pauseVideos();

    document.querySelectorAll(".swiper-slide").forEach((s) => {
        s.addEventListener("click", () => {
            const video = s.querySelector(".swiper-slide__video");

            if(!video.paused) {
                video.pause();

                const button = s.querySelector(".video-play");
                button.style.display = "block";
            }
        })
    });

    function pauseVideos() {
        const videos = document.querySelectorAll(".swiper-slide__video");
        videos.forEach(v => v.pause());

        const buttons = document.querySelectorAll(".video-play");
        buttons.forEach(b => b.style.display = "block");
    }

    function getVideoIndex(video) {
        return video.getAttribute("id").split("-")[1];
    }

    function initVideo(videoId, buttonId) {
        const video = document.querySelector(videoId);
        const buttonPlay = document.querySelector(buttonId);

        buttonPlay.addEventListener("click", (e) => {
            e.stopPropagation();

            pauseVideos();

            const videoIndex = getVideoIndex(video);
            const activeVideo = document.querySelector(".swiper-slide-active").querySelector(".swiper-slide__video");
            const activeVideoIndex = getVideoIndex(activeVideo);
            const skipCount = videoIndex - activeVideoIndex;

            swiper.slideTo(swiper.activeIndex + skipCount);

            video.play();

            buttonPlay.style.display = "none";
        })
    }

    initVideo("#video-1", "#video-play-1");
    initVideo("#video-2", "#video-play-2");
    initVideo("#video-3", "#video-play-3");
})