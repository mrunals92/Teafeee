<?php

session_start();

    if(isset($_POST["submit"]))
    {
        
        include "connection.php";
        $name = $_POST["name"];
        $contact = $_POST["number"];
        $email = $_POST["email"];
        $persons = $_POST["persons"];
        $custdob =  $_POST["date"];

        $insertstatement = $conn->prepare("INSERT INTO custbookings(custname,custcontact,custemail,customers,custdob) VALUES (?,?,?,?,?)");

        $insertstatement->bind_param("sssis",$name,$contact,$email,$persons,$custdob);

        if($insertstatement->execute()==TRUE)
        {
          echo
            '
              <script type="text/javascript">
              alert("THANK YOU");
              window.location.href="book.php";
              </script>
            ';            
        }
         else
        {
          echo
            '
              <script type="text/javascript">
              alert("Something went wrong.");
              window.location.href="book.php";
              </script>
            ';
         }

    }

?>






