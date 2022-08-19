<?php 
include('vendor/db.php');
$url_serever = $_SERVER['REQUEST_URI'];
$url = "http://" . $_SERVER['HTTP_HOST'] . $url_serever;
$find = mysqli_query($connection, "SELECT * FROM `links` WHERE `cut_link` = '$url'");
if ( mysqli_num_rows($find) == 0) {
	header("Location: /");
}
else{
	$find = mysqli_fetch_assoc($find);
	$find = $find['full_link'];
	header("Location: $find");
}
?>