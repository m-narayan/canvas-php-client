<?php
class Course extends Canvas{

	public function get_course($id){
		return $this->get_json("/courses/".$id);
	}

	public function create_course($account_id,$sis_course_id,$name,$public_description){
		$data=json_encode(array("account_id"=>$account_id,"course" =>array( "sis_course_id" => $sis_course_id,"name" => $name, "public_description" => $public_description )));		

	print_r($data);
		return $this->post_json("/accounts/".$account_id."/courses",$data);
	}
	

}
