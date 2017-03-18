<!DOCTYPE html>
<html>
<body>
<head>
<!-- imports css file and google font api's -->
<link rel="stylesheet" href="stylesheet.css">
<link href='http://fonts.googleapis.com/css?family=Ubuntu:bold' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<!-- title of webpage -->
<title>Garrett Graham</title>
<body>
  <?php

  $toggle = "";
  if (empty($_REQUEST)){
  ?>
  <!-- I created a div, so that the white, translucent background would surround all text -->
  <div>
    <h1 id = "title">Garrett Graham</h1>
    <!-- section title, "About" -->
    <p id = "aboutTitle">About</p>
    <!-- text for the "About" sectino -->
    <p id = "aboutText">
      This is text that is about me. <br><br>

      This is text about my career interests.<br><br>

      This is text about my hobbies.<br><br>

      This is miscellaneous text.
    </p>
    <!-- created a class for button styling -->
    <section class = "border">
      <!-- functionality not yet implemented to move to exp/courses -->
    <button type="button" class = "border" id = "exp" onclick=""> Experience </button>
    <button type="button" class = "border" id = "work" onclick=""> Coursework </button>
    </section>
    <hr>
    <!-- simple footer text.....seeking more efficient way to space text -->
    <p id = "footer">Built by Garrett Graham - made with HTML and CSS.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Last Updated: 3/13/16</p>

  </div>
  <?php }

  else if (&toggle == "expOn") {
  ?>

  <div>
    <h1 id = "title">Garrett Graham</h1>
    <!-- section title, "About" -->
    <p id = "experienceTitle">Experience</p>
    <!-- text for the "About" sectino -->
    <p id = "experienceText">
      Work Experience <br><br>

      This is text about my career interests.<br><br>

      This is text about my hobbies.<br><br>

      This is miscellaneous text.
    </p>
    <!-- created a class for button styling -->
    <section class = "border">
      <!-- functionality not yet implemented to move to exp/courses -->
    <button type="button" class = "border" id = "exp" onclick=""> About </button>
    <button type="button" class = "border" id = "work" onclick=""> Coursework </button>
    </section>
    <hr>
    <!-- simple footer text.....seeking more efficient way to space text -->
    <p id = "footer">Built by Garrett Graham - made with HTML and CSS.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Last Updated: 3/13/16</p>

  </div>
<?php } ?>

<script>
    var experience = document.getElementById("exp");
    var coursework = document.getElementById("work");

    exp.onclick = function(){
        <?php $toggle = "expOn"; ?>
    }

    work.onclick = function() {
      <?php $toggle = "workOn"; ?>
    }
</script>



</body>
</html>
