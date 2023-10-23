<?php
require_once('connection.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width =device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,100&display=swap" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://texttospeech.googleapis.com/$discovery/rest?version=v1">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" href="styles.css">
  <!-- <link rel="stylesheet" -->
    <!-- href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <link rel="icon" href="favicon.ico">
    <title>Arogini Blood Bank</title>
  <body>
    <section>
    <div class="container" id="blur">
<section id="banner">
<img src="logo1.jpeg" class="logo">
<div class="banner-text">
  <h1>BLOOD BANK</h1>
  <p>A drop for you, an ocean for someone else</p>
<div class="banner-btn">
  <a href="user/login.php"><span></span>ADMIN</a>
  <a href="abs.html"><span></span>ABOUT US</a>
</div>
</div>
</section>

<!--<div id="sideNav">
  <nav>
    <ul>
      <li><a href="#"><h2>HOME</h2></a></li>
      <li><a href="#"><h2>BECOME A DONOR</h2></a></li>
      <li><a href="#"><h2>SEARCH DONOR</h2></a></li>
      <li><a href="#"><h2>REQUEST BLOOD</h2></a></li>
      <li><a href="#"><h2>CURRENT REQUEST</h2></a></li>
    </ul>
  </nav>
</div>-->

<?php
include("navbar.php");

 ?>
<!--<script>
  var menuBtn=document.getElementById("menuBtn")
  var sideNav=document.getElementById("sideNav")
  var menu=document.getElementById("menu")

  sideNav.style.right="-250px";

  menuBtn.onclick= function(){
    if(sideNav.style.right== "-250px"){
      sideNav.style.right="0";
      menu.src="images/close.png";
    }
    else {
      sideNav.style.right= "-250px";
      menu.src="images/menu.png";
    }
}
</script>-->
</section class="data">
<section>
<div class="cnt">
    <div class="titl">
        NEED AND AVAILABILITY COUNT
    </div>
    <div class="container">
      <div class = "row text-center">
        <div class = "col-md-6 counter-box">
  <div class="cr">
    <p class="counter">
      <?php
           $sql7 = "SELECT count(*) FROM requestblood ";
           $r7 = $con->query($sql7);

           while($row7 = mysqli_fetch_array($r7))
           {
             echo $row7['count(*)'];
             echo "<br />";
           }
      ?></p>
      <p>CURRENT REQUESTS</p>
  </div>
          <div class="cr">
            <p class="counter">
              <?php
                $sql6 = "SELECT count(*) FROM becomedonor ";
                $r6 = $con->query($sql6);

                while($row6 = mysqli_fetch_array($r6))
                {
                  echo $row6['count(*)'];
                  echo "<br />";
                }
                ?></p>
              <p>DONORS AVAILABLE</p>
          </div>

            </div>
          </div>
          </div>
          <!--counter-->
          <script src="jquery.counterup.min.js"></script>
          <script
          src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <!--  <script>
          jQuery(document).ready(function( $ )
          {
            $('.counter').counterUp({
             delay: 10,
             time: 1000
              });
          });

        </script>-->

    <div class="opt">
        <a href="myform.html" class="btn-data" > Become a donor </a>
    </div>
    </section>

<!---------------------------------------------->
<!--<section class="cards">
  <figure class="container_1" id="card">
      <figcaption>
          SHARE A LITTLE CARE A LITTLE DONATE BLOOD
      </figcaption>
  </figure>
  <figure class="container_1" >
      <figcaption>
          TEARS OF MOTHER CANNOT SAVE HER CHILD, BUT HER BLOOD CAN
      </figcaption>
  </figure>
<br>
  <figure class="container_1" id="card">
      <figcaption>
          GIVE BLOOD,GIVE LIFE
      </figcaption>
  </figure>
  <figure class="container_1">
      <figcaption>
          BLOOD IS A GIFT TO SAVE ONE
      </figcaption>
  </figure>

</section>
<!------------------------------------------------------>
<section>
<!--<img src="border.png" alt="" id="border">-->
<!--<img src="border1.jpg" alt="" id="border">-->
<!--<img src="border.png" alt="" id="border">-->
</section>
  </body>
  </head>
</html>
