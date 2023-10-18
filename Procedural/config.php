<?php

define("DB_SERVER" , "Localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "crud_project");


   $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

   if($link == FALSE){
    die("Connection Failed ". mysqli_connect_error());
   }
?>