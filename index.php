<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> PERFUMEWORLD.com </title>
          <meta charset = " utf - 8 ">
          <meta name = " viewport " content = " width = device - width , initial - scale = 1 ">
          <link rel="stylesheet" href="style.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        </head>
        <?php
          session_start();
          include("connection.php");
      ?>
        <body>
        
          <nav class="navbar-inverse" style="background-color: black">
              <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
                  <a class="navbar-brand" href="?page=home">PerfumeWorld</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <form class="navbar-form" >
                    <ul class="nav nav-bar navbar-left">
                    <div class="form-group">
                      <li><input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Search</button></li>
                  </ul>
                  <div class="header">
                    <div class="nav navbar-nav navbar-right">
                      <a href="https://www.facebook.com/perfumeworld.com.vn"><img class="img" src="image/fb.jpg"></a>
                      <a href="https://instagram.com/perfume.world.vn?igshid=ms1usprmap0e"><img class="img" src="image/ig.png"></a>
                      <a href="https://bitly.com.vn/dw5xt1"><img class="img" src="image/location.jpg"></a>
                  </div>
                  </div>
                  </form>
                  <br>
                  <br>
                <ul class="nav navbar-nav navbar-left">
                  <li class="active"><a href="?page=home">Home</a></li>
                  <li ><a href="?page=aboutus">About Us</a></li>
                  <li><a href="?page=contact">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <?php
              if(isset($_SESSION['us'])&& $_SESSION['us'] !=""){
              ?>
              <li><a href="?page=update_customer"><span class="glyphicon glyphicon-user"></span> Account</a></li>
              <li><a href="?page=logout"><span class="glyphicon glyphicon-log-out"></span>Log out</a></li>
              <?php
              }
              else
              {
              ?>
              <li><a href="?page=register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              <?php
              }
      ?>
      <li><a href="?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                  
                </ul>
              </div>
            </div>
          </nav>

         
      <br>
        
        <?php
    if(isset($_GET['page']))
    {
      $page = $_GET['page'];
        if($page=="home"){
          include_once("home.php");
        }

      }
  else{
      include("home.php");
    }
            ?>


      <footer class="section footer-classic context-dark bg-image" style="background: black;">
              <div class="container">
                <div class="row row-30">
                  <div class="col-md-4 col-xl-5">
                  <br>
                    <div class="pr-xl-4"><a class="brand" href="?page=home"><img class="brand-logo-light" src="image/logo.jpg" alt="" width="140" height="50" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                      
                      <!-- Rights-->
                      <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h5>Contacts</h5>
                    <dl class="contact-list">
                      <dt>Address:</dt>
                      <dd>70, Le Lai, An Phu, Can Tho</dd>
                    </dl>
                    <dl class="contact-list">
                      <dt>email:</dt>
                      <dd><a href="mailto:#">ngocdk@gmail.com</a></dd>
                    </dl>
                    <dl class="contact-list">
                      <dt>phones:</dt>
                      <dd><a href="tel:#">0779814377</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
                      </dd>
                    </dl>
                  </div>
                  <div class="col-md-4 col-xl-3">
                    <h5>PerfumeWorld</h5>
                    <ul class="nav-list">
                      <li><a href="?=aboutus">About us</a></li>
                      <li><a href="?page=allproduct">Product</a></li>
                      <li><a href="#">Contacts</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row no-gutters social-container">
                <div class="col"><a class="social-inner" href="https://www.facebook.com/perfumeworld.com.vn"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
                <div class="col"><a class="social-inner" href="https://instagram.com/perfume.world.vn?igshid=ms1usprmap0e"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
                <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
                <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
              </div>
            </footer>
      </body>
      </html>