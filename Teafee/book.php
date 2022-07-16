<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Teafee </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="" data-target="#adminModal" data-toggle="modal">
            <span>
              Teafee
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class= "nav-link" href= "home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "menu.php">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "book.php"> Book Table </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href= "">Contact Us</a>
              </li>             
            </ul>
            <div class="user_option">
              <a href="" class="user_link" data-target="#myModal" data-toggle="modal">
                <i class="fa fa-user" aria-hidden="true">&nbsp;&nbsp; Login </i>
              </a>
          </div>
          </div>
        </nav>
      </div>
    </header>
  </div>

  <!-- end header section -->



      <!-- Admin login modal -->
      <div class="modal fade" id="adminModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="column" id="main">
                          <h1>Admin Login </h1>
                          
                          <form action="adminlogin.php" method="post" >
                            
                            <div class="form-group">
                              <label for="InputEmail1">E-mail </label>
                              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="username">
                            </div>
                            <div class="form-group">
                              <label for="InputPassword1">Password</label>
                              <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                          </form>
                        </div>
                        <!-- column 2 -->
                        <div class="column" id="secondary">
                          <div class="sec-content">
                            <h2>Welcome Back!</h2>
                            <p></p>
                            <!-- <button type="button" class="btn btn-primary" name="submit" data-dismiss="#myModal"  data-target="#myModal" data-toggle="modal" >Sign Up</button> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

        <!-- Admin login modal end -->       



      <!-- Sign up Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="column" id="main">
                  <h1> Sign Up </h1>
                  
                  <form action="signup.php" method="post" >
                    <div class="form-group">
                      <label for="InputName">Name</label>
                      <input type="name" class="form-control" id="InputName" placeholder="Name" name="uname">
                    </div>
                    <div class="form-group">
                      <label for="InputEmail1">E-mail </label>
                      <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="uemail">
                    </div>
                    <div class="form-group">
                      <label for="InputPassword1">Password</label>
                      <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="upass">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Sign Up</button>
                  </form>
                </div>
                <!-- column 2 -->
                <div class="column" id="secondary">
                  <div class="sec-content">
                    <h2>Welcome Back!</h2>
                    <p>Have an account....?</p>
                    <button type="button" class="btn btn-primary" data-target="#myModal2" data-toggle="modal" >Login</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- sign up modal end -->

      <!-- login modal -->
                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <div class="column" id="main">
                          <h1> Login </h1>
                          
                          <form action="login.php" method="post" >
                            
                            <div class="form-group">
                              <label for="InputEmail1">E-mail </label>
                              <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="username">
                            </div>
                            <div class="form-group">
                              <label for="InputPassword1">Password</label>
                              <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Login</button>
                          </form>
                        </div>
                        <!-- column 2 -->
                        <div class="column" id="secondary">
                          <div class="sec-content">
                            <h2>Welcome Back!</h2>
                            <p>Don't have an account.....?</p>
                            <button type="button" class="btn btn-primary" name="submit" data-dismiss="#myModal"  data-target="#myModal" data-toggle="modal" >Sign Up</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
       
      <!-- login modal end -->       


  <!-- book section -->
  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <center>
          <h2>
            Book A Table
          </h2>
        </center>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="bookconn.php" method="post" name="f1">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" name="name">
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Phone Number" name="number">
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div>
                <select class="form-control nice-select wide" name="persons">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="">
                    1
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control" name="date">
              </div>
              <div class="btn_box">
                <button name="submit">
                  Book Now
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  teafee@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Teafee
            </a>
           <br>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am
          </p>
        </div>
      </div>
      
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>