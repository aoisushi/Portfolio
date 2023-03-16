// hamburger menu

// set var to the menu click event
const hamburger = document.querySelector(".is-menu-toggle");
const navMenu = document.querySelector(".site-header__menu");
const navCloseMenu = document.querySelector(".close-btn");

// open the menu
hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
})
// close the toggle menu
navCloseMenu.addEventListener("click", () => {
    navMenu.classList.remove("active");
})




// slide
const productContainers = [...document.querySelectorAll('.c4_art_container')];
const preBtn = [...document.querySelectorAll('.pre-btn')];
const nxtBtn = [...document.querySelectorAll('.next-btn')];


productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

