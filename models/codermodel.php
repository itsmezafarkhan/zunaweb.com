<?php

class CoderModel extends Model
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
	
	/****************USER DETAILS AND LOGIN********************/
	public function getUserDetails($userName)
	{
		$sql = "SELECT user_id, user_name, user_email, user_password_hash FROM users WHERE user_name = ?";				
		
		$this->_setSql($sql);
		$userDetails = $this->getRow(array($userName));
		
		if (empty($userDetails))
		{
			return false;
		}
		
		return $userDetails;
	}
	
	public function checkUserName($user_name)
	{
		$sql = "SELECT user_name, user_email, user_password_hash FROM users WHERE user_name = ?";				
		
		$this->_setSql($sql);
		$userName = $this->getRow(array($user_name));
		
		if (empty($userName))
		{
			return false;
		}
		
		return $userName;
	}
	
	public function createNewUser()
	{
		$sql = "INSERT INTO users (user_name, user_password_hash, user_email) VALUES( ?, ?, ?)";
		
		$data = array(
			$this->_userName,
			$this->_userEmail,
			$this->_password
		);
		
		$sth = $this->_db->prepare($sql);
		return $sth->execute($data);
	}
	
	public function checkUserAccess($userid,$modulename)
	{
		$sql = "SELECT ma.status FROM modules_access ma JOIN  modules m ON m.id = ma.module_id WHERE ma.user_id = '".$userid."' and m.name = '".$modulename."' ";				
		
		$this->_setSql($sql);
		$userAccessStatus = $this->getRow();
		
		if (empty($userAccessStatus) || $userAccessStatus['status'] == 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	public function checkSideBarAccess($userid)
	{
		$sql = "SELECT m.id, m.name, m.parent, ma.status FROM modules_access ma JOIN  modules m ON m.id = ma.module_id WHERE ma.user_id = '".$userid."' and m.status = 1 ";				
		
		$this->_setSql($sql);
		$moduleAccessStatus = $this->getAll();
		
		if (empty($moduleAccessStatus))
		{
			return false;
		}
		else
		{
			return $moduleAccessStatus;
		}
	}
	
}