<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Share</title>
  
    <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@500;700&family=Lobster&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

  <?php
  $bg = array( 'img4.jpg', 'img3.jpg' , 'img7.jpg','img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg', 'img7.jpg','img8.jpg','img9.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  
?> 
<style type="text/css">

html { 
    font: 14px/20px "Lato", Arial, sans-serif;
    background: url(img/<?php echo $selectedBg; ?>) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
  }
</style>
<link rel="stylesheet"   href="./indstyle.css">

<div class="loader">
        <div></div>
    </div>

    <div class="slide-container" id="card">
  
        <div class="wrapper">
          <div class="clash-card barbarian">
            <div class="clash-card__image clash-card__image--barbarian">
              <img src="./img/santa_crop.png" alt="barbarian" />
            </div>
            
            <div class="clash-card__unit-name">Merry Christmas 
              </div>
            <div class="clash-card__unit-description">
              in advance
            </div>
            <div class="clash-card__from">
              from
            </div>
            <div  id = "setUname"class="clash-card__level clash-card__level--barbarian"></div>
            <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
              <div class="one-third">
                <div class="stat" id="days">20</div>
                <div class="stat-value">Day</div>
              </div>
      
              <div class="one-third">
                <div class="stat" id="hours">16</div>
                <div class="stat-value">Hours</div>
              </div>
      
              <div class="one-third no-border">
                <div class="stat" id="mins">10</div>
                <div class="stat-value">Min</div>
              </div>
      
            </div>
      
          </div> <!-- end clash-card barbarian-->
        </div> <!-- end wrapper -->
        <br>
        </div>

            <!-- Code begins here -->
        
        <a onclick="sharebtn()"  id="shrbtn" class="float">
          <i class="fa fa-share-alt my-float"></i>
          </a>
          <div class="intro">  </div>
          <div id="snow-fall">  </div>

          <div id="popup">
            <div class="form">
              <input type="text" id="uname" name="name" autocomplete="off" required>
              <label for="name" class="label-name">
                <span class="content-name">Enter Your Name</span>
              </label>
            </div>
            <div class="sharebuttondiv">
            
              <button class="wbutton" onclick="sharebtn() ,sendwhatsapp()"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
      
              <button class="fbutton" onclick="sharebtn(), sendfacebook()"><i class="fa fa-facebook" aria-hidden="true"></i></button>
            </div>
                 </div>
                 <div id="snackbar" >Incorrect Name </div>
 
                 <marquee id="movingsanta" behavior="scroll" direction="left">
                  <img src="img/movingsatna.gif" class="img" height="50px" width="150px" alt="Ship">
                </marquee>


                <audio id="myAudio">
                  <source src="./music/jingle-belwa.mp3" type="audio/mpeg">
                 
                </audio>
  <!-- script -->

  <script
  src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"
  integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ=="
  crossorigin="anonymous"></script>
   <script src="./ind.js"></script>
    <script src="./particles.js"></script>
    <script src="./app.js"></script>
      <script>
        $(window).on('load',function(){
            $(".loader").fadeOut(1000);
            $(".slide-container").fadeIn(1000);
            $(".intro").fadeIn(1000);
            callload();
        });
    </script>
</body>
</html>

