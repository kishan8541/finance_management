<?php
$hostname = "localhost";
$username = "root";
$password = "Admin1234#@";
$dbname = "finance";

$config = mysqli_connect($hostname,$username,$password,$dbname);


$base_url = 'https://localhost/finance_management/';


if($config){
    // echo "database connection successfull";
}

else{
    echo "database not connected";
}

?>