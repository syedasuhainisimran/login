<?php 
$connect = mysqli_connect('localhost','root','','login');

$sql = "INSERT INTO adds(fast_name,last_name,email,password,textarea) VALUES('$first','$last','$email','$password','$text')";

$mysql_query = mysqli_query($connect, $sql);
if ($mysql_query) {
	echo "data inser successfully";
}else{
	die('data not insert'.mysqli_error($connect));
}
$connect = mysqli_connect('localhost','root','','login');

$sql = "INSERT INTO adds(fast_name,last_name,email,password,textarea) VALUES('$first','$last','$email','$password','$text')";

$mysql_query = mysqli_query($connect, $sql);
if ($mysql_query) {
	echo "data inser successfully";
}else{
	die('data not insert'.mysqli_error($connect));
}



