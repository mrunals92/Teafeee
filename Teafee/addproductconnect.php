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

include "connection.php";


    if(  isset($_POST["submit"])  )
    {

        // file upload

      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["dishimg"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


      if (move_uploaded_file($_FILES["dishimg"]["tmp_name"], $target_file)) 
        {
          echo " File Uploaded " ;
        
        } 
      
      else 
          {
            echo "Sorry, there was an error uploading your file.";
          }


    //  end file upload


      $id = $_POST["id"];
      $name = $_POST["name"];
      $price = $_POST["price"];
      $desc = $_POST["description"];
      $img = $target_file ;

      $insertstatement = $conn->prepare("INSERT INTO dish(id,dishname,price,descrip,img) VALUES (?,?,?,?,?)");

      $insertstatement->bind_param("issss",$id,$name,$price,$desc,$img);

      

      if ($insertstatement->execute()==TRUE)
      {
         echo "
        <script type='text/javascript'>
          alert('Dish added');
          window.location.href='addproduct.php';
        </script>
      ";
      }
      else{
         echo "
        <script type='text/javascript'>
          alert('Something went wrong.. Try again');
          window.location.href='addproduct.php';
        </script>
      ";
      }
      

    }
    else
    {
      echo "
        <script type='text/javascript'>
        alert('Dish added');
          window.location.href='addproduct.php';
        </script>
      ";
    }
?>