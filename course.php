<?php
class Course extends Canvas{

	public function get_course($id){
		return $this->get_json("/courses/".$id);
	}


	public function create_course($accountid,$sis_course_id,$name,$public_description){
		$data = json_encode(array("account_id"=>$accountid,"course" => array( "sis_course_id" => $sis_course_id,
								 "name" => $name, "public_description" => $public_description )));
		return $this->post_json("/accounts/".$accountid."/courses",$data);
	}
	
	public function update_course($id,$name,$public_description){
    	$data = json_encode(array("course" => array( "name" => $name, "public_description" => $public_description)));
    	return $this->put_json("/courses/".$id,$data);
  	}

  	public function enroll_user($course_id,$user_id, $type = "StudentEnrollment", $enrollment_state = "active",  $notify = 0){
    	$data = json_encode(array("enrollment" => array( "user_id" => $user_id, "type" => $type, "enrollment_state" => $enrollment_state, "notify" => $notify)));
    	return $this->post_json("/courses/".$course_id."/enrollments",$data);
  	} 

  	public function conclude_enrollment($course_id,$user_id){
    	return $this->delete_json("/courses/".$course_id."/enrollments/".$user_id."?task=conclude");
  	}

  	public function delete_course($id){
    	return $this->delete_json("/courses/".$id."?event=delete");
  	}

	public function conclude_course($id){
    	return $this->delete_json("/courses/".$id."?event=conclude");
  	}  

  	public function modules($course_id){
  		return $this->get_json("/courses/".$course_id."/modules");
  	}

}
