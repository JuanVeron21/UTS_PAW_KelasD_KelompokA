<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "UTS";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno())
    {
        echo "Failed tp connect to MySQL : " . mysqli_connect_error();
    }
?>