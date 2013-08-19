<?php
require "Canvas.php";
class User extends Canvas{

	public function courses($accountid){
		return $this->get_json("/accounts/".$accountid."/courses");
	}

	public function create_user($accountid,$name,$unique_id,$password){
		$data = json_encode(array("user" => array("name" => $name),"pseudonym" => array("unique_id" => $unique_id,"password" => $password)));
		return $this->post_json("/accounts/".$accountid."/users",$data);
	}

	public function update_user($id,$name){
		$data = json_encode(array("user" => array("name" => $name)));
		return $this->put_json("/users/".$id,$data);
	}

	public function delete_user($account_id,$id){
		return $this->delete_json("/accounts/".$account_id."/users/".$id);
	}
	public function get_course($id){
		return $this->getcourse_json("/courses/".$id);
	}
}

?>