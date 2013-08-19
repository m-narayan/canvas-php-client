<?php
require "Canvas.php";
class User extends Canvas{


	public function courses($accountid){
		return $this->get_json("/accounts/".$accountid."/courses");
	}
	public function create($accountid){
		return $this->put_json("/accounts/".$accountid."/courses");
	}
}

?>