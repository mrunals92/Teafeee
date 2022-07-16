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

      $deletestatement = $conn->prepare("DELETE FROM dish WHERE id=?");

      $deletestatement->bind_param("s",$id);

      if( $deletestatement->execute()==TRUE )
      {
        echo "
                <script type='text/javascript'>     
                alert('Data deleted');             
                  window.location.href='viewproduct.php';
                </script>
                ";
      }
      else
      {
        echo "
                <script type='text/javascript'>     
                alert('Something went wrong');             
                  window.location.href='viewproduct.php';
                </script>
                ";
      }
  }
      else
      {
        echo "
                    <script type='text/javascript'>                  
                      window.location.href='viewproduct.php';
                    </script>
                    ";
      }

?>