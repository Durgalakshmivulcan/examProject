<?php
 error_reporting(E_ERROR | E_PARSE);
$server="localhost";
$username="root";
$password="";
$database="examproject";
$conn=new mysqli($server,$username,$password,$database);
if($conn){
    // echo "success";
}else{
    echo "fail";
}
?>