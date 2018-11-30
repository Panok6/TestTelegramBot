<?php
class TelegramBot{
	protected $token="756160133:AAGMFG3-hOnAMwBhuDLmIhb0YL1AOmN4qI4";
	protected function apiQuery($method,$params=[]){
        $url="https://api.telegram.org/bot";
        $url.=$this->token;
        $url.="".$method;
	}
	public function getUpdates(){

	}
	public function sendMessage(){

	}
}
?>