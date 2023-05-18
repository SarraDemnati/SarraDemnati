var o = document.getElementById("scroll");
var l = document.getElementById("item");

o.style.width = o.childElementCount/4*100+"%";

var p = o.offsetWidth/o.childElementCount;

var m = document.getElementsByClassName("highlight_active");
var dots = document.getElementsByClassName("highlight_strip_item");

var left = 0;

function HighlightButtonLeft()
{
  left += p;

  if(left > 0)
  {
    left = -(o.offsetWidth-(l.offsetWidth+8)*4);
  }

  o.style.left = left+"px"
}
function HighlightButtonRight()
{
  left -= p;

  if(left < -(o.offsetWidth-l.offsetWidth*4))
  {
    left = 0;
  }

  o.style.left = left+"px"
}

var newIndex = 0;
var lastIndex = 0;

showHighlight();

function currentHighlight(h)
{
  lastIndex = newIndex;
  newIndex = h;

  if(newIndex > o.childElementCount-1)
  {
    newIndex = 0;
  }

  showHighlight();
}

function showHighlight()
{
  TweenMax.fromTo(m[lastIndex], 1, {autoAlpha:1, display:"block"}, {autoAlpha:0, display:"none"});

  for (i = 0; i < dots.length; i++)
  {
     dots[i].style.opacity = 0.2;
  }
  TweenMax.fromTo(m[newIndex], 1, {autoAlpha:0, display:"block"}, {autoAlpha:1, display:"block"});
  dots[newIndex].style.opacity = 1;
}

window.setInterval(function()
{
  //currentHighlight(newIndex + 1);
}, 10000);
