var sideMenu = document.getElementById("nav-side-menu");
const boardCategoryElements = document.getElementsByClassName('board-items-category');
//const navButtons = Array.from(document.querySelector('.nav-button'));
const navButtons = document.querySelectorAll('.nav-button');
const navContainer = document.getElementById("nav-container");
const bannerContainer = document.getElementById("banner");
const bannerHeight = bannerContainer.clientHeight;
let buttonSideMenu = document.getElementById("nav-side-button").addEventListener("click", switchMenu, false);

//notification-animation: show two times
function notificationAnimation(){
  if (window.innerWidth < 700) {
    if(sessionStorage.getItem("notificationBubble") == null || sessionStorage.getItem("notificationBubble") == undefined ){
      sessionStorage.setItem('notificationBubble', 1);
      $('#nav-notification').addClass('nav-notification-animation');
    }else if(sessionStorage.getItem("notificationBubble") == 1){
        sessionStorage.setItem('notificationBubble', 2);
        $('#nav-notification').addClass('nav-notification-animation');
      }
  }
}

function switchMenu(e){
  e.preventDefault();
  e.stopPropagation();
  if(sideMenu.style.display == "flex"){
    sideMenu.style.display= "none";  
  }else{
    sideMenu.style.display = "flex";
  }
};

function cerrarSesion(){
  window.location.href="/log-out";
};

function checkAndSetFixed() {
  if (window.innerWidth > 700) {
    if (window.scrollY > bannerHeight) {
      navContainer.style.position = "fixed";
      navContainer.style.top = "0";
    } else {
      navContainer.style.position = "absolute";
      navContainer.style.top = "auto";
    }
  }else{
    navContainer.style.position = "fixed";
    navContainer.style.top = "0";
  }
}

// Verificar inicialmente

function hideElementsExcept(id){
  sessionStorage.setItem("category", id);

  navButtons.forEach(button=>{
    if(button.dataset.category !== id){
      button.classList.remove('nav-button-select');
    }else{
      button.classList.add('nav-button-select');
    }
  });
  
  for (let i = 0; i < boardCategoryElements.length; i++) {
    const element = boardCategoryElements[i];
    if (element.id === id) {
      element.style.display = 'block'; // Mostrar el elemento con el ID dado
    } else {
      element.style.display = 'none'; // Ocultar los otros elementos
    }
  }
  location.href='#board-container';
}

function initCategoryShow() {
  let initCategory;

  if (window.innerWidth > 700) {
    if(sessionStorage.getItem('category') == null){
      initCategory = navButtons[0].dataset.category;
    }else{
      initCategory = sessionStorage.getItem('category');
    }

    for (let i = 0; i < boardCategoryElements.length; i++) {
      const element = boardCategoryElements[i];
      if (element.id == initCategory) {
        element.style.display = 'block'; // Mostrar el elemento con el ID dado
      } else {
        element.style.display = 'none'; // Ocultar los otros elementos
      }
    }

    navButtons.forEach(button=>{
      if(button.dataset.category !== initCategory){
        button.classList.remove('nav-button-select');
      }else{
        button.classList.add('nav-button-select');
      }
    });

  }else{
    for (let i = 0; i < boardCategoryElements.length; i++) {
      const element = boardCategoryElements[i];
        element.style.display = 'block';
    }
  }
}

//------------ INIT -----------//

window.addEventListener("scroll", checkAndSetFixed);
window.addEventListener("resize", checkAndSetFixed);
window.addEventListener("resize", initCategoryShow);

document.addEventListener("click", function(e){
  var sideClick = e.target;
  if(sideMenu.style.display =='flex' && sideClick != sideMenu){
    sideMenu.style.display ='none';
  }
}, false);

document.addEventListener('DOMContentLoaded', function() {
  initCategoryShow();
  notificationAnimation();
  checkAndSetFixed();
  initCategoryShow();
});




