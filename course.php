<?php
class Course extends Canvas{

	public function get_course($id){
		return $this->get_json("/courses/".$id);
	}

	public function create_course($accountid,$sis_course_id,$name,$public_description){
$data = json_encode("account_id" => $account_id,"course" => array("sis_course_id" => $sis_course_id,"name" =>
 $name,"public_description" => $public_description)));
	print_r($data);
		return $this->post_json("/accounts/".$accountid."/courses",$data);
	}
	

}
