<?php

namespace LogicalSystem\NodeRed;

use LogicalSystem\HttpCalls\HttpCalls;

class NodeRed {

    public $baseUrl;
    public $authToken;

    public function __construct($baseUrl, $authToken)
    {
        $this->baseUrl = $baseUrl;
        $this->authToken = $authToken;
    }

    
    public function postStoricoComandi($data) {
        $url = $this->baseUrl."/storico-comandi";
        return HttpCalls::post($url,$data,"application/json",["Authorization: ".$this->authToken]); 
    }

}


?>