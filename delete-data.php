<?php

  $connection = mysqli_connect("localhost","root","root","mysqli_procedures");

  if(mysqli_connect_errno()){

    print_r("Error: ".mysqli_connect_error());
    exit();
  }

  $delete_query = "CALL deleteUserData(1)";

  if(mysqli_query($connection, $delete_query)){

    echo "<h3>User Deleted successfully</h3>";
  }else{

    echo "<h3>Failed to delete user</h3>";
  }

 ?>
