<?php
require "Canvas.php";
class User extends Canvas{

	public function courses($accountid){
		return $this->get_json("/accounts/".$accountid."/courses");
	}

	public function create_user($accountid,$name,$unique_id,$password){
		$data = json_encode(array("user" => array("name" => $name),"pseudonym" => array("unique_id" => $unique_id,"password" => $password)));
		echo $data;
		$this->post_json("/accounts/".$accountid."/users",$data);
	}
}

?>