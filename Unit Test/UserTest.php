<?php
use PHPUnit\Framework\Testcase;
class UserTest extends Testcase{
	public function testReturnFullName(){
		require 'User.php';
		$user = new User;
		$user->first_name = "Nabiha";
		$user->surname = "Noor";

		$this->assertEquals('Nabiha Noor', $user->getFullName());
	}
	
}