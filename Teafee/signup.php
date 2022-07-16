<?php

  session_start();

      if(  isset( $_POST["submit"] ) )
      {
          include "connection.php";
          $name = $_POST["uname"];
          $emailid = $_POST["uemail"];
          $password  = $_POST["upass"];

          $encpassword = password_hash( $password, PASSWORD_DEFAULT)  ;

          $insertstatement = $conn->prepare("INSERT INTO users(uname,uemail,upass) VALUES (?,?,?)");

          $insertstatement->bind_param("sss",$name,$emailid,$encpassword);

          if($insertstatement->execute()==TRUE)
          {
            echo
              '
                <script type="text/javascript">
                  alert("User Added");
                  window.location.href="home.php";
                </script>
              ';
              
          }
          else
          {
            echo
              '
                <script type="text/javascript">
                  alert("Something went wrong.");
                  window.location.href="home.php";
                </script>
              ';
          }
        }
        else
        {
          echo
          '
            <script type="text/javascript">
              window.location.href="home.php";
            </script>
          ';
        }

?>