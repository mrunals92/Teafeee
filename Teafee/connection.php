<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "teafeedb";

    $conn = new mysqli($server,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die($conn->connect_error);
    }

?>