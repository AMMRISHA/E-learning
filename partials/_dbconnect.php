<?php
$server ="localhost";
$username = "root";
$password ="";
$database ="e_learning";

$conn = mysqli_connect($server , $username , $password , $database);


if(!$conn)
{
//     echo "Connected successfully!!";

// }
// else{

echo "There is an error".mysqli_connect_error();
}

?>