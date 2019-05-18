<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || ANY SeedS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">ANY SeedS</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="SeedSC.php">SeedS</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>Welcome to shop

ANY SeedS – A platform for your all gardening needs<br>

Gardens have been an indispensable part of our homes, more so now, ever than before – thanks to the need of the hour to create greener spaces around us and our wish to live close to nature.
<br>
Well, Gardening is not just about having a few plants in our backyard. It’s an art of cultivating plants, a passionate hobby for many, to curate different plants that add to the beauty of our homes.
<br>
ANY SeedS, an online nursery that started its active operations in DEC 2018, is India’s largest online nursery, that has grown immensely in a short span of time, incurring high volume of sales and building a huge customer base.
<br>
Headquartered in nagpur, this online market for gardening products sells more than 5000 stock keeping units (SKUs) of plants, seeds and garden accessories, all available at a single place.
<br>
Vision
To make spaces around us green & healthy place to live
<br>
Mission<br>
To develop an easy-to-use, affordable & quality driven platform that fulfills all gardening related needs across India
       </p>

        
        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; ANY SeedS.</p>
        </footer>

      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
