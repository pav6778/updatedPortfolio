
<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-11/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <title>Portfolio</title>
  </head>
  <body>
    <div class="container-full">
      <div id="landingpage">
        <h1 id="motto">Think. Design. Create.</h1>
        <div id="navBtns">
          <button id="homeBtn">Home</button>
          <button id="aboutMeBtn">About Me</button>
          <button id="portfolioBtn">Portfolio</button>
          <button id="contactMeBtn">Contact</button>
        </div>
      </div>
      <div  class="container">
        <div id="aboutMe">
          <h2>About Me</h2>
          <div>
            <img width="200px" class="float-left" src="assets/images/myface.png" alt="" />
            <p id="p">
              I am a busy and frustrated student <br>that is struggling to find time to do school
              work <br> to achieve better results. (excuses)
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div id="portfolio">
          <h2>Portfolio</h2>
          <div>
            <div class="row">
              <div class="card col-3" style="width: 10rem;">
                <img
                  class="card-img-top"
                  src="assets/images/songsparrow.png"
                  alt="Card image cap"
                />
                <div class="card-body">

                  <a href="https://gainstrive.github.io/song-sparrow" class="btn">SongSparrow</a>
                </div>
              </div>
              <div class="card col-3" style="width: 10rem;">
                <img
                  class="card-img-top"
                  src="assets/images/triviagame.png       "
                  alt="Card image cap"
                />
                <div class="card-body">
                  <a href="https://pav6778.github.io/TriviaGame/" target="_blank"class="btn">Trivia Game</a>
                </div>
              </div>
              <div class="card col-3" style="width: 10rem;">
                <img
                  class="card-img-top"
                  src="assets/images/rpggame.png"
                  alt="Card image cap"
                />
                <div class="card-body">

                  <a href="https://pav6778.github.io/unit-4-game/" target="_blank"class="btn">StarWars RPG</a>
                </div>
              </div>
              <div class="card col-3" style="width: 10rem;">
                <img
                  class="card-img-top"
                  src="assets/images/hangman.png"
                  alt="Card image cap"
                />
                <div class="card-body">

                  <a href="https://pav6778.github.io/Word-Guess-Game/" class="btn">HangMan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container" id="contactMe">
        <div>
          <h2>Contact</h2>
          <div>
            <form method="POST"action="contact.php" id="emailForm">
              <label>Name</label>
              <input placeholder="John Smith" type="text" class="form-control" />
              <label>Email</label>
              <input placeholder="mrsmith@gmail.com" type="email" class="form-control" />
              <label>Comment</label>
              <textarea class="form-control" rows="6"></textarea>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/javascript/portfolio.js"></script>
  </body>
</html>
