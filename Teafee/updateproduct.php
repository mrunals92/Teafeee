<?php
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
?>
<?php

    if(  isset($_POST["submit"])  )
    {
      include "connection.php";

      $id = $_POST["id"];
      $name = $_POST["name"];
      $price = $_POST["price"];
      $desc = $_POST["description"];
     

      $updatestatement = $conn->prepare("UPDATE dish SET id=?,dishname=?,price=?,descrip=? WHERE id=?");

      $updatestatement->bind_param("isss",$id,$name,$price,$desc,$id);

      if ($updatestatement->execute()==TRUE)
      {
         echo "
        <script type='text/javascript'>
          alert('Data Updated');
          window.location.href='viewproduct.php';
        </script>
      ";
      }
      else{
         echo "
        <script type='text/javascript'>
          alert('Something went wrong.. Try again');
          window.location.href='viewproduct.php';
        </script>
      ";
      }
      

    }
    else
    {
      echo "
        <script type='text/javascript'>
          
          window.location.href='addproduct.php';
        </script>
      ";
    }
?>