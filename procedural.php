<?php

   $connection = mysqli_connect("localhost","root","root","learn_codeigniter");

   if(mysqli_connect_errno()){

       print_r("Connection error: ".mysqli_connect_error());

       exit();
   }

   //$insert_query = "INSERT into books (book_name, book_email, book_price) VALUES('MySQLI tutorial','abcdef@gmail.com','100')";

   //$update_query = "UPDATE books set book_email = 'onlinewebtutohub@gmail.com' WHERE id = 3";

   $delete_query = "DELETE from books WHERE id = 2";

   $query = mysqli_query($connection, $delete_query);

   //print_r("Last data inserted at: ".mysqli_insert_id($connection));

   //$query = mysqli_query($connection, "SELECT * from books where id = 3");

   //print_r(mysqli_num_rows($query)); // count of all the data inside data set

   //while($row = mysqli_fetch_array($query)){
   //while($row = mysqli_fetch_assoc($query)){
   //while($row = mysqli_fetch_object($query)){

     //print_r($row);
     //echo "ID: ".$row->id.", Book name: ".$row->book_name."<br/><br/>";
   //}

  mysqli_free_result($row);

    mysqli_close($connection);
 ?>
