<!-- <?php
  session_start();

  if( !isset( $_SESSION["mysession"])  )
  {
     echo
              '
                <script type="text/javascript">                        
                  window.location.href="home.php";
                </script>
              ';
  }
?> -->

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Teafee </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet"/>
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet"/>

</head>
<style type="text/css">
.btn{
  border-radius: 45px;
  background: linear-gradient(to right, #f1da36 0%,#fca86c 99%);
  text-transform: uppercase;
  width: 200px;
  padding: 10px;
  margin: 30px auto;
  font-family: 'PT Sans', sans-serif;
  letter-spacing: 2px;
  color: white;
}
.form_container{
  margin-left: 80px;
}


</style>
<body>

<header class="header_section bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="home.html">
            <span>
              Teafee
            </span>
          </a>
          <div class="collapse navbar-collapse justify-content-end header_section" id="collapsibleNavbar">
            <ul class="navbar-nav header_section">                    
              <li class="nav-item">
                <a class="nav-link " href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

      <!-- Add product form -->

    <div class="row ">
      <div class="col-md-8 p-5 mt-5">
        <div class="form_container">
          <h1>Add Dish</h1>
          <br>
          <form action="addproductconnect.php" method="POST" name="f1" enctype="multipart/form-data">
            <div>
              <input type="text" name="id" class="form-control" placeholder="Enter id ">
            </div>
            <br>
            <div>
               <input type="text" name="name" class="form-control" placeholder="Enter name">
            </div>
            <br>
            <div>
              <input type="text" name="price" class="form-control" placeholder="Enter price">
            </div>
            <br>
            <div>
              <input type="text" name="description" class="form-control" placeholder="Enter description">
            </div>
            <br>
            <br>
            <div>
            <input type="file" name="dishimg" class="uploadbtn" >
            </div>
            <br>
            <input type="submit" name="submit" class="btn btn-warning">
          </form>
        </div>
      </div>

          <!-- add product form end -->

      <div class="row">
          <div class="col-md-4 p-5 mt-5 ">
            <center>
              <a href="viewproduct.php" class="btn btn-warning">View Dishes</a>
            </center>
          </div>
      </div>
 </div>

</body>
</html>