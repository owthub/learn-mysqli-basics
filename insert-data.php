<?php

  $connection = mysqli_connect("localhost","root","root","mysqli_procedures");

  if(mysqli_connect_errno()){

    print_r("Error: ".mysqli_connect_error());

    exit();
  }

  $insert_query = "CALL insertUserData('Rahul Kumar', 'rahul@gmail.com','8974541245', 1)";

  if(mysqli_query($connection, $insert_query)){

    echo "Data has been inserted into database";
  }else{

    echo "Failed to insert data into database";
  }

 ?>
