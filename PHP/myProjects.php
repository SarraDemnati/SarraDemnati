<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Chivo:300,700|Playfair+Display:700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel:700|Lobster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sarabun" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/Header.css">
    <link rel="stylesheet" href="../CSS/Footer.css">
    <link rel="stylesheet" href="../CSS/Projects.css">
  </head>
  <body>
    <?php include 'Header.php'; ?>
    <div class="section" id="section-1-wrap">
      <div class="about">
        <p>on this page you can find all my games and projects.</p>
      </div>
      <div class="infobutton" id="infobutton">
        <a class="arrow" href="javascript:void(0);"  onclick="scrollButton()">&#187;</a>
      </div>
    </div>
    <div class="section" id="section-2-wrap">
      <div class="games-container">
        <div class="game-wrap">
          <div class="game-item">
            <div class="img-wrapper">
              <a class="game-link" href="Freqy.php">
                <img src="../Pictures/freqyTumbnail.jpg">
              </a>
            </div>
            <div class="game-content">
              <p>this is a endless runner with music as obstacle.</p>
            </div>
            <div class="buttons-wrap">
              <div class="buttons">
                <a href="Freqy.php">
                  <div class="button">
                    <div class="inner_button">
                      <p>View Page</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="game-wrap">
          <div class="game-item">
            <div class="img-wrapper">
              <a class="game-link" href="BeatTheBoss.php">
                <img src="../Pictures/beatTheBossTumbnail.jpg">
              </a>
            </div>
            <div class="game-content">
              <p>this is a endless runner platformer. you can make your own levels with your own songs.</p>
            </div>
            <div class="buttons-wrap">
              <div class="buttons">
                <a href="BeatTheBoss.php">
                  <div class="button">
                    <div class="inner_button">
                      <p>View Page</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="game-wrap">
          <div class="game-item">
            <div class="img-wrapper">
              <a class="game-link" href="StarWars.php">
                <img src="../Pictures/starWars2.png">
              </a>
            </div>
            <div class="game-content">
              <p>This is a vertical slice about the game star wars battlefront 1. The game is focused on flying inside a x-wing.</p>
            </div>
            <div class="buttons-wrap">
              <div class="buttons">
                <a href="StarWars.php">
                  <div class="button">
                    <div class="inner_button">
                      <p>View Page</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="game-wrap">
          <div class="game-item">
            <div class="img-wrapper">
              <a class="game-link" href="ZombieFeeder.php">
                <img src="../Pictures/thicShader2.png">
              </a>
            </div>
            <div class="game-content">
              <p>This is a small project focused on the normal extrude shader. So when you feed the zombie he gets fat in specific places.</p>
            </div>
            <div class="buttons-wrap">
              <div class="buttons">
                <a href="ZombieFeeder.php">
                  <div class="button">
                    <div class="inner_button">
                      <p>View Page</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="game-wrap">
          <div class="game-item">
            <div class="img-wrapper">
              <a class="game-link" href="InventorySystem.php">
                <img src="../Pictures/inventorySystem2.png">
              </a>
            </div>
            <div class="game-content">
              <p>this is a small project focused on the inventory.</p>
            </div>
            <div class="buttons-wrap">
              <div class="buttons">
                <a href="InventorySystem.php">
                  <div class="button">
                    <div class="inner_button">
                      <p>View Page</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'Footer.php'; ?>
    <script src="../Scripts/Header.js"></script>
    <script src="../Scripts/GameLayout.js"></script>
  </body>
</html>
