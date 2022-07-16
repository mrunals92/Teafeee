<!-- <?php
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

.table{
  width: 200px;
}
.btn{
  border-radius: 45px;
  width: 100px;
}
.btn2{
  border-radius: 45px;
  background: linear-gradient(to right, #f1da36 0%,#fca86c 99%);
  text-transform: uppercase;
  width: 200px;
  padding: 20px;
  margin: 30px auto;
  font-family: 'PT Sans', sans-serif;
  letter-spacing: 2px;
  color: white;
}




</style>
<body>
  <div class="container">
    <div class="row bg-light">
      <div class="col-md-8 p-5 mt-5">
          <center><h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Menu</h1></center>
          <br>
          <table class="table  table-bordered">
            <tr>
              <th>Sr. No.</th>
              <th>Id</th>
              <th>Image</th>
              <th>Name</th>
              <th>Price</th>
              <th>Desc</th>         
              <th>Delete</th>
              <th>Update</th>
            </tr>            
          <?php
              include "connection.php";
              
              $count = 0;
              $selectstatement = $conn->prepare("SELECT * FROM dish");

              $selectstatement->execute();

              $result = $selectstatement->get_result();

              if($result->num_rows>0)
              {
                  while(  $row = $result->fetch_assoc())
                  {
                      $count++;
                      $id = $row["id"];
                      $name = $row["dishname"];
                      $price = $row["price"];
                      $desc = $row["descrip"];  
                      $img = $row["img"];
                      

                      echo'
                        <tr>
                          <td>
                            '.$count.'
                          </td>
                          <td>
                            '.$id.'
                          </td>
                          <td>
                            <img src='.$img.'>
                          </td>
                          <td>
                            '.$name.'
                          </td>
                          <td>
                            '.$price.'
                          </td>
                          <td>
                            '.$desc.'
                          </td>
                          <td>
                            <a href="delete.php?myid='.$id.'"  class="btn btn-danger"> Delete </a>
                          </td>
                           <td>
                            <a href="edit.php?myid='.$id.'"  class="btn btn-primary"> Update </a>
                          </td>
                        </tr>
                      ';
                  }
              }
              else{
               echo "
                <script type='text/javascript'>
                  alert('No record');
                  window.location.href='addproduct.php';
                </script>
                ";
              }
          ?>
         </table>
      </div>
      <div class="row">
        <div class="col-md-12 p-5 mt-5">
           <div>
            <center>
              <a href="addproduct.php" class="btn2 btn-warning">Add Dishess</a>
            </center>
           </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>