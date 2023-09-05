// let searchForm = document.querySelector('.search-form');
// let loginForm = document.querySelector('.login-form');
let navbar = document.querySelector('.navigation');

// document.querySelector('#search-btn').onclick = () =>{
//     searchForm.classList.toggle('active');
//     loginForm.classList.remove('active');
//     navbar.classList.remove('active');
// }


// document.querySelector('#login-btn').onclick = () =>{
//     loginForm.classList.toggle('active');
//     searchForm.classList.remove('active');
//     navbar.classList.remove('active');
// }


document.querySelector('#menu-bar').onclick = () =>{
    navbar.classList.toggle('active');
//     searchForm.classList.remove('active');
//     loginForm.classList.remove('active');
    }

window.onscroll = () =>{
//     searchForm.classList.remove('active');
//     loginForm.classList.remove('active');
    navbar.classList.remove('active');
}
window.addEventListener("scroll", function(){ 
 var header = document.querySelector("header");
 header.classList.toggle("sticky", window.scrollY > 0) 
})

var swiper = new Swiper(".product-slider", {
  loop:true,
  spaceBetween: 20,
  autoplay: {
      delay: 3000,
      disableOnInteraction: false,
  },
  centeredSlides: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1020: {
      slidesPerView: 3,
    },
  },
});



$(document).ready(
  ()=>{
  $('.counter').each(
    ()=>{
    $(this).prop('Counter',0).animate({
      counter : $(this).text()
    }
    ,{
      duration : 10000,
      easing : 'swing',
      step : function(now){
        $(this).text(Math.ceil(now));
      }
    })
    
  }
  );
});

let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
  slides[index].classList.remove('nyala');
  index = (index + 1) % slides.length;
  slides[index].classList.add('nyala');
}

function prev(){
  slides[index].classList.remove('nyala');
  index = (index - 1 + slides.length) % slides.length;
  slides[index].classList.add('nyala')
}

const accordianItemHeader = document.querySelectorAll(".accordian-item-header");

accordianItemHeader.forEach(accordianItemHeader => {
  accordianItemHeader.addEventListener("click", Event => {
    const currentlyActiveAccordionItemHeader = document.querySelector(".accordian-item-header.active");
    if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordianItemHeader) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }
    accordianItemHeader.classList.toggle("active");
    const accordianItemBody = accordianItemHeader.nextElementSibling;
    if(accordianItemHeader.classList.contains("active")) {
      accordianItemBody.style.maxHeight = accordianItemBody.scrollHeight + "px";
    }
    else{
      accordianItemBody.style.maxHeight = 0;
    }
  });
});