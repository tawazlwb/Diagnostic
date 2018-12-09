<?php

class Message extends CI_Model {

    function __construct() {	
    }
    
    public function sender()
	{
		return 'Ismail KHAIRY';
    }
    
    public function content()
	{
		return 'Hello world!';
    }
    
    public function toString()
	{
        // return ['sender' => $this->sender(), 'content' => $this->content()];
        return array('sender' => $this->sender(), 'content' => $this->content());
    }
}
