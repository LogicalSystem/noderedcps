<?php

namespace LogicalSystem\NodeRed;

use LogicalSystem\HttpCalls\HttpCalls;

class NodeRedCps {

    public $baseUrl;
    public $authToken;

    public function __construct($baseUrl, $authToken)
    {
        $this->baseUrl = $baseUrl;
        $this->authToken = $authToken;
    }

    

    public function getStoricoComandi($id = NULL, $codiceCdl = NULL) {
        if(!is_null($codiceCdl)) $url = $this->baseUrl."/storico-comandi/cdl/".$codiceCdl;
        elseif(!is_null($id)) $url = $this->baseUrl."/storico-comandi/id/".$id;
        else $url = $this->baseUrl."/storico-comandi";
        return HttpCalls::get($url,["Authorization: ".$this->authToken]);
    }
    
    public function postStoricoComandi($data) {
        $url = $this->baseUrl."/storico-comandi";
        return HttpCalls::post($url,$data,"application/json",["Authorization: ".$this->authToken]); 
    }

}


?>