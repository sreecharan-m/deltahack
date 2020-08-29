<?php


$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

session_start();

if(isset($_SESSION['logged_in']))

{
     


}

else {

	header('location: index.php');
}


?>