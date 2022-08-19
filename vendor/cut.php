<?php 
include('db.php');
$link = $_POST['link'];
$link = stripslashes($link);
$link = htmlspecialchars($link);

$cutlink = mysqli_query($connection, "SELECT * FROM `links`");
$cutlink = mysqli_num_rows($cutlink) + 1;

$url = "http://" . $_SERVER['HTTP_HOST'] . "/" . $cutlink;


$select_links = mysqli_query($connection, "SELECT * FROM `links` WHERE `full_link` = '$link'");
if (mysqli_num_rows($select_links) == 0) {	
	if (filter_var($link, FILTER_VALIDATE_URL)) {
		$cutlink = mysqli_query($connection, "SELECT * FROM `links` WHERE id=LAST_INSERT_ID()") + 1;
		mysqli_query($connection, "INSERT INTO `links` (`full_link`, `cut_link`) VALUES ('$link', '$url')");
		echo $url;
	}else{
		echo "invalid";		
	}
}else{
	$find = mysqli_query($connection, "SELECT * FROM `links` WHERE `full_link` = '$link'");
	$find = mysqli_fetch_assoc($find);
	echo $find['cut_link'];
}

?>