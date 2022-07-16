<?php
  session_start();

  if( !isset( $_SESSION["mysession"])  )
  {
     echo
              '
                <script type="text/javascript">                        
                  window.location.href="adminlogin.php";
                </script>
              ';
  }
?> 
<?php

  if(isset($_GET["myid"]))
  {
      $id= $_GET["myid"];

      include "connection.php";

       $selectstatement = $conn->prepare("SELECT * FROM dish WHERE id=?");

       $selectstatement->bind_param("s",$id);

       $selectstatement->execute();  

        $result = $selectstatement->get_result();

        if($result->num_rows>0)
        {
          if(  $row = $result->fetch_assoc())
            {                      
                  
                      $id = $row["id"];
                      $name = $row["dishname"];
                      $price = $row["price"];
                      $desc = $row["descrip"]; 
            }
        }else
        {
             echo "
                <script type='text/javascript'>    
                alert('no record');              
                  window.location.href='viewproduct.php';
                </script>
                ";
        }
  }
  else{
     echo "
                <script type='text/javascript'>                  
                  window.location.href='viewproduct.php';
                </script>
                ";
  }

  

?> 

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
.myform{
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
                <a class="nav-link " href="home.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

  <div class="container-fluid">
    <div class="row bg-light">
      <div class="col-md-8 p-5 mt-5">
              <center><h1>Update Product</h1></center>
              <br>
          <form action="updateproduct.php" method="POST" class="myform">
            <div>
              <input type="text" name="id" class="form-control" placeholder="Update ID" value="<?php echo $id;  ?>">
            </div>
            <br>
            <div>
              <input type="text" name="name" class="form-control" placeholder="Update Name" value="<?php echo $name;  ?>">
            </div>
            <br>
            <div>
              <input type="text" name="price" class="form-control" placeholder="Update Price" value="<?php echo $price;  ?>">
            </div>
              <br>
            <div>
              <input type="text" name="descrip" class="form-control" placeholder="Update Description" value="<?php echo $desc;  ?>">
            </div>
              <br>

            <input type="submit" name="submit" value="Update" class="btn">
          </form>
      </div>
      <div class="col-md-4 p-5 mt-5">
      <center>
        <a href="viewproduct.php" class="btn ">View Product</a>
        <br>
        <br>
        <a href="addproduct.php" class="btn">Add Product</a>
      </center>
    </div>
    </div>
    
  </div>
</body>
</html>