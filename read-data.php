<?php

   $connection = mysqli_connect("localhost","root","root","mysqli_procedures");

   if(mysqli_connect_errno()){

     print_r("Error: ".mysqli_connect_error());
     exit();
   }

   //$select_query = "CALL readAllUserData()";
   $select_query = "CALL readSpecificUserData(4)";

   $results = mysqli_query($connection, $select_query);

   while($row = mysqli_fetch_assoc($results)){

     echo "<pre>";
     print_r($row);
   }

   mysqli_close($connection);

 ?>
