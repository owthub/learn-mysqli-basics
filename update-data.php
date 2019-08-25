<?php

   $connection = mysqli_connect("localhost","root","root","mysqli_procedures");

   if(mysqli_connect_errno()){

     print_r("Error: ".mysqli_connect_error());
     exit();
   }

   $update_query = "CALL updateUserData(2, 'Online Web Tutor','onlinewebtutorhub@gmail.com', '1234567890', 1)";

   if(mysqli_query($connection, $update_query)){

     echo "<h3>Updated successfully</h3>";
   }else{
     echo "<h3>Failed to update</h3>";
   }

 ?>
