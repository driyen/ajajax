<?php

    include_once('Response.php');

class SuccessResponse extends Response {

    public $message;
    public $success;
    public $obj;

    function __construct ($success,$message,$obj){
        parent::__construct($success,$message);
        $this ->obj = $obj;
    }
}

?>