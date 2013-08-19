<?php
class Canvas{

	function __construct($oauth_token = "q3SUMcJqzGG13onCLpbqf20h8rA9EBnOCTTvDGzT4PuwitHUIidyGPEBHQTk4CUX", $api_root_url = "http://192.168.1.84:3000/api/v1"){
		$this->oauth_token = $oauth_token;
		$this->api_root_url = $api_root_url;
	
	}

	public function get_json($url){
		$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $this->api_root_url.$url."?access_token=".$this->oauth_token);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		return json_decode(curl_exec($handle),TRUE);
	}
	public function put_json($url){
		$data = json_encode(array(
		'name'=> 'Lms',
		'account_id'=> '3'
		));
			$handle = curl_init();
		curl_setopt($handle, CURLOPT_URL, $this->api_root_url.$url."?access_token=".$this->oauth_token);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($handle, CURLOPT_POSTFIELDS, $data);
		return json_decode(curl_exec($handle),TRUE);
	}

}
?>