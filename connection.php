<?php
$host='localhost';
$user='root';
$password='';
$db='bookstore';

$connection=mysqli_connect($host,$user,$password,$db);

if(mysqli_connect_error())
{
	die("connection is not successfull");
}
 else
 	{
 		"Successfully connected...." ;

}







?>