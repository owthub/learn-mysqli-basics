<?php

  // connection
  $connection = new mysqli("localhost","root","root","learn_codeigniter");

  if($connection->connect_errno){

    print_r("Connection Error: ".$connection->connect_error);

    exit();
  }

  // delete data

  //$delete_query = "DELETE from books WHERE id = 6";

  //if($connection->query($delete_query) === TRUE){

      //echo "Deleted Successfully";
  //}else{
    //  echo "Error: ".$connection->error;
  //}

  // update data
  /*$update_query = "Update books set book_name = 'test book' WHERE id = 5";

  if($connection->query($update_query) === TRUE){
    echo "Updated data Successfully";
  }else{
    echo $connection->error;
  }*/

  // insert data
  /*$insert_query = "INSERT INTO books1 (book_name, book_email, book_price) VALUES
                    ('Metabox Tutorials' ,'metabox@gmail.com' ,'1000')";

  if($connection->query($insert_query) === TRUE){

     echo 'Successfully inserted data, '.$connection->insert_id;
  }else{

    echo "Error: ".$connection->error;
  }*/

  // select data from table
  $get_data = $connection->query("SELECT * from books");

  while($row = $get_data->fetch_object()){ // fetch_array, fetch_assoc, fetch_object

    //print_r($row);
    echo "ID: ".$row->id.", Book name: ".$row->book_name.", Book Price: ".$row->book_price."<br/>";
  }

  $connection->close();

 ?>
