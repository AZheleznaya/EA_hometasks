// modal-youtube
var tag = document.createElement('script');
var player;
var done = false;
let buttonClose = document.getElementById("stopVideo");

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: 'BfgHIftIG6w',
        events: {
        'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
}

function stopVideo() {
    player.stopVideo();
}

buttonClose.addEventListener("click", () => {
    stopVideo()
});

// modal-local
const video = document.querySelector("#video");
const buttonPlay = document.querySelector(".video-play");
const buttonCloseLocal = document.querySelector(".close-button");

buttonPlay.addEventListener("click", () => {
    video.play();
    buttonPlay.style.display="none";
})

buttonCloseLocal.addEventListener("click", () => {
    video.pause();
    video.currentTime = 0;
    buttonPlay.style.display="block";
})

