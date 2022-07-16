<?php
session_start();

if( isset($_POST["submit"]))
{
    include "connection.php";

    $uname = $_POST["username"];
    $pwd = $_POST["password"];

    $selectstatement = $conn->prepare("SELECT * FROM adminlogin WHERE email=?");

    $selectstatement->bind_param("s",$uname);

    $selectstatement->execute();

    $result = $selectstatement->get_result();

    if($result->num_rows > 0)
    {
        if( $row = $result->fetch_assoc() )
            {
             $pass=$row["pass"];
            
              if($pwd==$pass)
              {
                
                echo
                '
                  <script type="text/javascript">  
                    alert("Thank you");                      
                    window.location.href="addproduct.php";
                  </script>
                ';
              }
            }else
            {
              echo
              '
                <script type="text/javascript">
                  alert("Check your credentials");           
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
            alert("User not registred");           
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