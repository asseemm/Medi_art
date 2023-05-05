const navbar = document.querySelector(".navbar");
navbar.querySelector(".toggle").addEventListener("click", () => {
  navbar.classList.toggle("collapsed");
});
window.addEventListener("scroll", e => {
  let windowY = window.pageYOffset;
  let navbarHeight = document.querySelector(".navbar").offsetHeight;
  if (windowY > navbarHeight) navbar.classList.add("sticky");
  else navbar.classList.remove("sticky");
});

var swiper = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 50,
  loop: true,
  centerSlide: 'true',
  fade: 'true',
  grabCursor: 'true',
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      1025: {
          slidesPerView: 3,
      },
  },
});

document.querySelector('#search').oninput = function(){
  let val = this.value.trim();
  let searchItems = document.querySelectorAll('.title');
  if (val != ''){
      searchItems.forEach(function(elem){
          if(elem.innerText.search(val) == -1){
              elem.classList.add('hide');
          }
          else{
              elem.classList.remove('hide');
          }
      });
  }
  else{
      searchItems.forEach(function(elem){
          elem.classList.remove('hide');
      })
  }
  
}