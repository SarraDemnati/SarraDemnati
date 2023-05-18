let games = document.getElementsByClassName('game-wrap');
var w = window.innerWidth;

console.log(games[0].clientHeight);

for (var i = 0; i < games.length; i++)
{
  if(w > 1055)
  {
    games[i].style.left = i%4 * 26.6 + "%";
    var heightOffset = 0;
    var row = Math.floor(i / 4); //1
    for (var j = 1; j < row+1; j++)
    {
      heightOffset += games[i - (4*j)].clientHeight+20;
    }
    games[i].style.top += heightOffset + 30 + "px";
  }
  else if(w < 450)
  {
    games[i].style.left = 5 + "%";
    var heightOffset = 0;
    var row = Math.floor(i / 1); //1
    for (var j = 1; j < row+1; j++)
    {
      heightOffset += games[i - (1*j)].clientHeight+20;
    }
    games[i].style.top += heightOffset + 30 + "px";
  }
  else if(w > 700 && w < 1055)
  {
    games[i].style.left = i%3 * 37 + "%";
    var heightOffset = 0;
    var row = Math.floor(i / 3); //1
    for (var j = 1; j < row+1; j++)
    {
      heightOffset += games[i - (3*j)].clientHeight+20;
    }
    games[i].style.top += heightOffset + 30 + "px";
  }
  else if(w < 700 && w > 450)
  {
    games[i].style.left = i%2 * 55 + "%";
    var heightOffset = 0;
    var row = Math.floor(i / 2); //1
    for (var j = 1; j < row+1; j++)
    {
      heightOffset += games[i - (2*j)].clientHeight+20;
    }
    games[i].style.top += heightOffset + 30 + "px";
  }
}
