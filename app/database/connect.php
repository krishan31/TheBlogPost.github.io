<?php  

$host = 'localhost';
$user = 'root';
$pass = 'Krishan@1998';
$db_name = 'project-1';

$conn = new MySQLi($host, $user, $pass, $db_name);

if($conn->connect_error) {

    die('database connection error: ' . $conn->connect_error);

} 
// else{
//     echo "database connected";
// }