<?php
/*
This File Contain to configure databsae 
user "roo" Password""
*/

define("DB_SERVER",'localhost');
define("DB_USERNAME",'root');
define("DB_PASSWORD",'');
define("DB_NAME",'bookmybus');

//  try connect database

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// CHECK CONN

if($conn==false){
    dir('Error : Cannot Connect');
}
?>