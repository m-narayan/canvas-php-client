<?php
	require "User.php";
	require "course.php";
	$user=new User();
	//$course=new Course();
	//print_r($course);
	$response=$user->delete_user(1,10);
	echo $response->name;
	echo $response->id;
	// foreach($response as $item)
	// {
	// 	echo $item->name."<br>";
	// }

	//$response=$course->modules(2);
	//print_r($response);


	//$response=$course->create_course(1,"ruby","ruby","ruby");
	//print_r($response);
	//echo $response["id"];

	// $courses=$user->courses(1);
	// foreach($courses as $val){
	// 	echo $val["name"]."<br>";
	// }
	//$response=$user->create_user(1,"babinasdasdas","babinasdasdas","babinasdasdas$");
	//print_r($response);
	//echo $response["id"];

	//$response=$user->update_user(9,"anand");
	//print_r($response);
	//echo $response["id"];

	//$response=$user->delete_user(1,9);
	//print_r($response);
	//echo $response["id"];

	//$courses=$user->get_course(2);
	//print_r($courses);

?>