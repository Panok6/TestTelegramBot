<?php
use GuzzleHttp\Client as Client;
class TelegramBot{
	protected $token="756160133:AAGMFG3-hOnAMwBhuDLmIhb0YL1AOmN4qI4";
	protected function apiQuery($method,$params=[]){
        $url="https://api.telegram.org/bot";
        $url.=$this->token;
        $url.="/".$method;
        if(!empty($params)){
        $url.="?".http_build_query($params);
        }
        $client = new Client(["base_uri"=>$url]);
        $result = $client->request("GET");
        return json_decode($result->getBody());
	}
	public function getUpdates(){
       $response=$this->apiQuery("getUpdates");
       return $response->result;
	}
	public function sendMessage(){

	}
}
?>