window.onscroll = function() {scrollFunction()};

var x = document.getElementById("site-header");
var y = document.getElementById("nav-bar");
var z = document.getElementById("icon");
var a = document.getElementById("responsive-menu-wrap");
//var b = document.getElementById("infobutton");

var hamburger = true;

function scrollFunction()
{
  let responsiveMenu = document.getElementsByClassName("responsive-menu-item");
  let menuItem = document.getElementsByClassName('menu-item');

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
  {
    if (x.className == " site-header"){ x.className += " shrink"; }
    if (y.className == " nav-bar"){ y.className += " shrink-container"; }
    if (z.className == " icon"){ z.className += " shrink-icon"; }
//    if (b.className == " infobutton"){ b.className += " hidden"; }
    for (var i = 0; i < menuItem.length; i++){ menuItem[i].style.color = "black"; }
    a.style.backgroundColor = "#f4f4f4";
  }
  else
  {
    if (x.className != " site-header"){ x.className = " site-header"; }
    if (y.className != " nav-bar"){ y.className = " nav-bar"; }
    if (z.className != " icon"){ z.className = " icon"; }
//    if (b.className != " infobutton"){ b.className = " infobutton"; }
    for (var i = 0; i < menuItem.length; i++){ menuItem[i].style.color = "white"; }
    a.style.backgroundColor = "#333";
  }
}

/*function scrollButton()
{
  window.scrollTo
  (
    {
      top: 582,
      behavior: "smooth"
    }
  );
  scrollFunction();
}*/

function myFunction()
{
  hamburger = !hamburger;

  if(hamburger)
  {
    a.style.transform = "matrix(1, 0, 0, 1, 0, 0)";
    for (var i = 0; i < responsiveMenu.length; i++){ menuItem[i].style.display = "block"; }
  }
  else
  {
    a.style.transform = "matrix(1, 0, 0, 1, 0, "+-screen.height+")";
    for (var i = 0; i < responsiveMenu.length; i++){ menuItem[i].style.display = "none"; }
  }
}
myFunction();
scrollFunction();
