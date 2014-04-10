<?php
error_reporting(E_ALL);
class User{
	public $name;
	public $email;
	private $password;
	static $sta;
 	
 	public function __construct() {
        var_dump('Hello Normal User class');
    }
	public function get_password(){  //return private property from a class

		return $this->password;
	}
	public function set_password($pass){ //set private property from a class
		$this->password=$pass;
	}




}
