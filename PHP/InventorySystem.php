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
    <div class="section" id="section-1-wrap" style="background-image: url(../Pictures/inventorySystem1.png)">
      <div class="centershow-wrap">
        <div class="centershow">
          <h1 class="title">Inventory System</h1>
          <div class="buttons-wrap">
            <div class="buttons">
              <a href="../Games/InventorySystem/index.html">
                <div class="button">
                  <div class="inner_button">
                    <p>Play</p>
                  </div>
                </div>
              </a>
              <a href="https://github.com/gwnrobin/InventorySystem">
                <div class="button" style="margin-left: 1rem">
                  <div class="inner_button">
                    <p>documentatie / code</p>
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
              <img id="game_cover" src="../Pictures/inventorySystem1.png">
              <div class="information">
                <div class="about_game">
                  <p>this is a small project focused on the inventory.<br><br></p>
                </div>
              </div>
            </div>
            <div class="leftcol">
              <div class="highlight">
                <div class="highlight_player">
                  <div class="highlight_player_area">
                    <img id="highlight_spacer" src="../Pictures/Spacer.png">
                  </div>
                  <iframe class="highlight_active highlight_movie" frameBorder="0" allowfullscreen src="https://www.youtube.com/embed/RKfCDpo5bok">Browser not compatible.</iframe>
                  <img class="highlight_active" src="../Pictures/inventorySystem2.png">
                  <img class="highlight_active" src="../Pictures/inventorySystem1.png">
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
                    <img class="highlight_strip_item" onclick="currentHighlight(0)" id="item" src="../Pictures/invSystemTumbnail.jpg">
                    <img class="highlight_strip_item" onclick="currentHighlight(1)" src="../Pictures/inventorySystem2.png">
                    <img class="highlight_strip_item" onclick="currentHighlight(2)" src="../Pictures/inventorySystem1.png">
                  </div>
                </div>
              </div>
            </div>
            <div style="clear: both"></div>
            <div class="info-section">
              <div class="about_infomation">
                <div class="info-text">
                  <h2>My part</h2>
                  <br>
                  <p>This is a solo project, Where it is about the inventory system.</p>
                </div>
              </div>
              <div class="about_infomation">
                <div class="info-text">
                  <h2>What did i learn</h2>
                  <br>
                  <p>I worked a lot with data in this projects. I used all my knowledge about interfaces and scriptable objects and more and used it in one project.</p>
                </div>
              </div>
              <div class="genaral_info">
                <div class="info-text">
                  <h2>General Information</h2>
                  <br>
                  <li>Name: Inventory system</li>
                  <li>Build time: 5 hours</li>
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
