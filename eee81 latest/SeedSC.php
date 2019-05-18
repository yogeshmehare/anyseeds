<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact || ANY SeedS</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
<style>
body  {
  
  background-color: #cccccc;
}
p.padd{
	 border: border 1px solid black; 
	 padding: 0.5px;
	font-size:100%;
	 text-align:center;
	
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 25%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

img{
	<a href="products.php"></a>
}
</style>
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
          <li><a href="about.php">About</a></li>
		   <li class="active"><a href="SeedSC.php">SeedS Category</a></li>
           <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          
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

   
      </div>
    </div>







    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
	<div class="row">
  <div class="column">
	<?php
	$_SESSION['page']="fws";
	?>
    <a href="all flower seeds.php">
	<img src="images/nurserylive-flower-seeds-organic-op-desi_220x220.jpg" alt="flower-seeds" style="width:100%"></a>
	<p class="padd">All flower-seeds</p>
  </div>

 
</div>
<br><br><br><br><br><br><br><br><br><br><br>
		<footer>
           <p style="text-align:center; font-size:0.8em;">&copy; ANY SeedS. All Rights Reserved.</p>
        </footer>
  </body>
</html>
