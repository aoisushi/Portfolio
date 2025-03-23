// Sidebar nav links
const navLinkEls = document.querySelectorAll('.tab-links');
const sectionEls = document.querySelectorAll('.section-here');

let currentSection = 'overview';
window.addEventListener('scroll', () => {
    sectionEls.forEach(sectionEl => {
        if (window.scrollY >= sectionEl.offsetTop) {
            currentSection = sectionEl.id;
        }
    });

    navLinkEls.forEach(navLinkEl => {
        if(navLinkEl.href.includes(currentSection)) {
            document.querySelector('.active').classList.remove('active');
            navLinkEl.classList.add('active');
        }
    })
})


// ================ Old Code ================ 

// // hamburger menu


// const hamburger = document.querySelector(".hamburger");
// const navMenu = document.querySelector(".site-header__menu");

// hamburger.addEventListener("click", () => {
//     hamburger.classList.toggle("active");
//     navMenu.classList.toggle("active");
// })

// document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", ()=> {
//     hamburger.classList.remove("active");
//     navMenu.classList.remove("active");
// }))



// // slide

// const carousel = document.querySelector(".carousel");
// const firstImg = carousel.querySelectorAll("img")[0];
// const arrowIcon = document.querySelectorAll(".slider_wrapper ion-icon");

// let isDragStart = false, isDragging = false,  prevPageX, prevScrollLeft, positionDiff;


// const showHideIcon = () => {
//     // showing and hiding prev / next icon according to carousel scroll left value

//     let scrollWidth = carousel.scrollWidth - carousel.clientWidth; //getting max scrollable width
//     arrowIcon[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
//     arrowIcon[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";

    
// }

// arrowIcon.forEach(icon => {
//     icon.addEventListener("click", () => {

//         let firstImgWidth = firstImg.clientWidth + 15; // getting first img width & adding 14 margin value
//         // if clicked icon is left, reduce width valur from the carousel scroll left else add to it
//         carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;

//         setTimeout(() => showHideIcon(), 60); //calling showHideIcon after 60ms
//     });
// })


// const autoSlide = () => {
//     // if there is no image left to scroll then return from here
//     if(carousel.scrollLeft == (carousel.scrollWidth - carousel.clientWidth)) return;

//     positionDiff = Math.abs(positionDiff); //Making positionDiff value to positive
//     let firstImgWidth = firstImg.clientWidth + 15;

//     // getting difference value that needs to add or reduce from carousel left to take middle img img center
//     let valDifference = firstImgWidth - positionDiff;

//     if(carousel.scrollLeft > prevScrollLeft) {   //if user is scrolling to the right
//         return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
//     }
//         // if user is scrolling to the left
//         carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;

// }

// const dragStart = (e) => {
//     // updatating global variables value on mouse down event
//     isDragStart = true;
//     prevPageX = e.pageX || e.touches[0].pageX;
//     prevScrollLeft = carousel.scrollLeft;
// }


// const dragging = (e) => {
//     // scrolling images/carousel to left according to mouse pointer
//     if(!isDragStart) return;
//     e.preventDefault();
//     isDragging = true;
//     carousel.classList.add("dragging"); 
//     positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
//     carousel.scrollLeft = prevScrollLeft - positionDiff;
//     showHideIcon();
// }


// const dragStop = () => {
//     isDragStart = false;
//     carousel.classList.remove("dragging"); 

//     if(!isDragging) return;
//     isDragging = false;
//     autoSlide();
// }


// carousel.addEventListener("mousedown", dragStart);
// carousel.addEventListener("touchstart", dragStart);

// carousel.addEventListener("mousemove", dragging);
// carousel.addEventListener("touchmove", dragging);

// carousel.addEventListener("mouseup", dragStop);
// carousel.addEventListener("mouseleave", dragStop);
// carousel.addEventListener("touchend", dragStop);
