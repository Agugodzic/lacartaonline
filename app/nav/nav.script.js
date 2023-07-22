var sideMenu = document.getElementById("nav-side-menu");

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

let buttonSideMenu = document.getElementById("nav-side-button").addEventListener("click", switchMenu, false);

document.addEventListener("click", function(e){
  var sideClick = e.target;
  if(sideMenu.style.display =='flex' && sideClick != sideMenu){
    sideMenu.style.display ='none';
  }
}, false);

window.addEventListener('scroll', function() {
  var nav = document.getElementById('nav-container');
  var top = nav.getBoundingClientRect().top;
  
  if (top < 250) {
    nav.classList.remove('nav-invert');
  } else {
    nav.classList.add('nav-invert');
  }
});