const options = {
    controlShadow: false,
};

const viewers = document.querySelectorAll(".image-compare");
viewers.forEach((element) => {
  let view = new ImageCompare(element, options).mount();
});

const themeWrappers = document.querySelectorAll(".icv__theme-wrapper");
themeWrappers.forEach((element) => {
    element.style.opacity = 0;
});

const controlLines = document.querySelectorAll(".icv__control-line");
controlLines.forEach((element) => {
    element.style.width = "1px";
})

const controlWrappers = document.querySelectorAll(".icv__control");
controlWrappers.forEach((element) => {
    const control = document.createElement("div");
    control.className = "control";
    element.appendChild(control);
});