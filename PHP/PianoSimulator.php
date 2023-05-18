<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700|Lobster" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/Footer.css">
    <link rel="stylesheet" href="../CSS/Game.css">
  </head>
  <body>
    <?php include 'Header.php'; ?>
    <div class="section" id="section-1-wrap" style="background-image: url(../Pictures/piano.jpg)">
      <div class="centershow-wrap">
        <div class="centershow">
          <h1 class="title" >Piano Simulator</h1>
          <div class="buttons-wrap">
            <div class="buttons">
              <a href="#">
                <div class="button no-play">
                  <div class="inner_button no-play-inner">
                    <p>Play</p>
                  </div>
                </div>
              </a>
              <a href="#">
                <div class="button" style="margin-left: 1rem">
                  <div class="inner_button">
                    <p>documentation / code</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <a class="arrow" href="javascript:void(0);"  onclick="scrollButton()">
        <div class="infobutton" id="infobutton">
          <p>&#187;</p>
        </div>
      </a>
    </div>
    <div id="section-2-wrap">
      <div class="test3">
        <div class="test2">
          <div class="game_highlights">
            <div class="rightcol">
              <img id="game_cover" src="https://via.placeholder.com/210x108">
              <div class="information">
                <div class="about_game">
                  <p>The game is axactly what the name says, it is a game where you play a piano. and piano is being played with a leap motion!!<br><br></p>
                </div>
              </div>
            </div>
            <div class="leftcol">
              <div class="highlight">
                <div class="highlight_player">
                  <div class="highlight_player_area">
                    <img id="highlight_spacer" src="../Pictures/Spacer.png">
                  </div>
                  <iframe class="highlight_active highlight_movie" frameBorder="0" allowfullscreen src="https://www.youtube.com/embed/XbGJzQgsNhU">Browser not compatible.</iframe>
                  <iframe class="highlight_active highlight_movie" frameBorder="0" allowfullscreen src="https://www.youtube.com/embed/XbGJzQgsNhU">Browser not compatible.</iframe>
                  <img class="highlight_active" src="https://via.placeholder.com/192x108">
                  <img class="highlight_active" src="https://via.placeholder.com/192x108">
                  <img class="highlight_active" src="https://via.placeholder.com/192x108">
                </div>
                <div class="highlight_strip">
                  <div class="highlight_buttons">
                    <a href="javascript:void(0);"  onclick="HighlightButtonLeft()">
                      <div class="highlight_button_left">
                        <p class="arrow_left">&#9650;</p>
                      </div>
                    </a>
                    <a href="javascript:void(0);"  onclick="HighlightButtonRight()">
                      <div class="highlight_button_right">
                        <p class="arrow_right">&#9650;</p>
                      </div>
                    </a>
                  </div>
                  <div class="highlight_scroll" id="scroll">
                    <img class="highlight_strip_item" onclick="currentHighlight(0)" id="item" src="https://via.placeholder.com/192x108">
                    <img class="highlight_strip_item" onclick="currentHighlight(1)" src="https://via.placeholder.com/192x108">
                    <img class="highlight_strip_item" onclick="currentHighlight(2)" src="https://via.placeholder.com/192x108">
                    <img class="highlight_strip_item" onclick="currentHighlight(3)" src="https://via.placeholder.com/192x108">
                    <img class="highlight_strip_item" onclick="currentHighlight(4)" src="https://via.placeholder.com/192x108">
                  </div>
                </div>
              </div>
            </div>
            <div style="clear: both"></div>
            <div class="info-section">
              <div class="about_infomation">
                <div class="info-text">
                  <h2>My Part</h2>
                  <br>
                  <p>this project was done solo by me. so i made all the code. this includes </p>
                </div>
              </div>
              <div class="about_infomation">
                <div class="info-text">
                  <h2>what i learned</h2>
                  <br>
                  <p>so at first this project was suppost to be in c++, but i came to a conclussion that i do not like unreal engine because of the blueprints. so even tho this project is made in Unity. I still did research after c++ and learned a lot from it. </p>
                </div>
              </div>
              <div class="genaral_info">
                <div class="info-text">
                  <h2>Genaral Infomation</h2>
                  <br>
                  <li>Name: Zombie feeder</li>
                  <li>Build time: 1 week</li>
                  <li>Engine: Unity</li>
                  <li>Language: C#</li>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'Footer.php'; ?>
    <script src="../Scripts/Header.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
    <script src="../Scripts/HighlightButton.js"></script>
  </body>
</html>
