<?php

    session_start();

if( isset($_POST["submit"]))
{
    include "connection.php";

    $username = $_POST["username"];
    $password = $_POST["password"];

    $selectstatement = $conn->prepare("SELECT * FROM users WHERE uemail=?");

    $selectstatement->bind_param("s",$username);

    $selectstatement->execute();

    $result = $selectstatement->get_result();

    if($result->num_rows > 0)
    {
        if( $row = $result->fetch_assoc() )
        {
            $pass=$row["upass"];
            if(  password_verify($password,$pass)   )
            {

              $_SESSION["mysession"] = $username;
              
              echo
              '
                <script type="text/javascript">  
                alert("Login Successfull");                         
                   window.location.href="home.php";
                </script>
              ';
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
    }else
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
          alert("Login Successfull");              
            window.location.href="home.php";
          </script>
        ';
          
}
?>