<?php
	require "User.php";
	$user=new User();
	$courses=$user->courses(1);
	print_r($courses);
	foreach($courses as $val){
		echo $val["name"]."<br>";
	}
	$create=$user->create(1);
	print_r($create);
?>