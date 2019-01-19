<?php

class ContactModel extends Model
{
	private $_yourName;
	private $_email;
	private $_website;
	private $_message;
	
	public function setYourName($yourName)
	{
		$this->_yourName = $yourName;
	}
	
	public function setEmail($email)
	{
		$this->_email = $email;
	}
	
	public function setWebsite($webiste)
	{
		$this->_website = $webiste;
	}
	
	public function setMessage($message)
	{
		$this->_message = $message;
	}
	
	public function sendEnquiry()
	{
	}
}