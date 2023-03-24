document.addEventListener("DOMContentLoaded", () => {
    const mouseCursor = document.querySelector(".cursor-round");
    const navLinksTop = document.querySelectorAll(".list-top__item");
    const navLinksMiddle = document.querySelectorAll(".list-middle__item");
    const arrowIcons = document.querySelectorAll(".nav-bottom__item_icon");
    const heroBlock = document.querySelector(".hero-block");
    const projectText = document.querySelector(".project-description__link");
    const informationTitle = document.querySelector(".information__title");
    const weapons = document.querySelector(".right-block__weapons");

    function cursor(e) {
        mouseCursor.style.top = e.pageY + "px";
        mouseCursor.style.left = e.pageX + "px";
    }

    window.addEventListener("mousemove", cursor);

    function addMouseListener(element, className, toggleClass) {
        element.addEventListener("mouseleave", () => {
            mouseCursor.classList.remove(className);
            if(toggleClass.length) {
                element.classList.toggle(toggleClass)
            }
        });
        element.addEventListener("mouseover", () => {
            mouseCursor.classList.add(className);
            if(toggleClass.length) {
                element.classList.toggle(toggleClass)
            }
        })
    }

    navLinksTop.forEach(link => {
        addMouseListener(link, "cursor__list-top");
    });
    navLinksMiddle.forEach(link => {
        addMouseListener(link, "cursor__list-middle", "active");
    })
    arrowIcons.forEach(icon => {
        addMouseListener(icon, "cursor__arrow");
    });
    addMouseListener(heroBlock, "cursor__hero-block");
    addMouseListener(projectText, "cursor__project-text");
    addMouseListener(informationTitle, "cursor__information-title");
    addMouseListener(weapons, "cursor__weapons");
})