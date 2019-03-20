<?php 
   
   include_once('Response.php');

   class FailResponse extends Response {
        
        public $message;
        public $success;
    
        function __construct ($success,$message){
            $this ->message = $message;
            $this ->success = $success;
    
        }
    }
?>