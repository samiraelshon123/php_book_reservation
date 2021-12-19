<?php
   $host = 'localhost';
   $username = 'root';
   $password = '';
   $DB_name = 'book_reserve';
   $conn = mysqli_connect($host, $username, $password, $DB_name);
   if(!$conn){
       echo mysqli_connect_error("error in connection");
   }
   