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


}


?>