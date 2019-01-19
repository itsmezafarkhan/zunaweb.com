<?php

class ContactController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'ZunaWeb Contact Us');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Contact');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i>/</i>Contact');
		$this->_view->set('navactive', 'contact');
		return $this->_view->output();
	}
	
	public function send()
	{
		$errors = array();
		$check = true;
		
		$your_name = isset($_POST['your_name']) ? trim($_POST['your_name']) : NULL;
		$email = isset($_POST['email']) ? trim($_POST['email']) : "";
		$website = isset($_POST['website']) ? trim($_POST['website']) : "";
		$message = isset($_POST['message']) ? trim($_POST['message']) : "";

		if (empty($your_name))
		{
			$check = false;
			array_push($errors, "Your Name is required!");
		}
		if (empty($email))
		{
			$check = false;
			array_push($errors, "E-mail is required!");
		}
		else if (!filter_var( $email, FILTER_VALIDATE_EMAIL ))
		{
			$check = false;
			array_push($errors, "Invalid E-mail!");
		}
			
		if (empty($message))
		{
			$check = false;
			array_push($errors, "Message is required!");
		}		
		else if (strlen ($message) > 5000)  
		{
			$check = false;
			array_push($errors, "Message is too long!");
		}		
		
		
		try {
			
			$data = array(
				'your_name' => $your_name,
				'email' => $email,
				'website' => $website,
				'message' => $message
			);
			
			if (!$check)
			{
				$this->_setView('index');
				
				$this->_view->set('title', 'ZunaWeb Contact Us');
				$this->_view->set('pagetitle', 'Contact');
				$this->_view->set('breadcrumb', '<a href="./">Home</a><i>/</i>Contact');
				$this->_view->set('navactive', 'contact');
				
				$this->_view->set('errors', $errors);
				$this->_view->set('data', $data);
				
				return $this->_view->output();
			}
			else
			{					
				$to = "yograjgharat@gmail.com, ".SUPPORT_EMAIL."";
				$subject = "Customer Email from ZunaWeb.com Contact US page";
				$message = "Client Name: ".$your_name." <br> ".$email." <br> ".$message."";
				$from = SUPPORT_EMAIL;
				$headers = 'From: '.SUPPORT_EMAIL.'' . "\r\n" . 
                'Reply-To: '.SUPPORT_EMAIL.'' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				//$headers = "From: Customer Email from ZunaWeb.com Contact US page. (" . $email . ")";
				mail($to,$subject,$message,$headers, '-f'.SUPPORT_EMAIL);
				
				 $this->_setView('index');
				$this->_view->set('title', 'ZunaWeb Contact Us');
				$this->_view->set('pagetitle', 'Contact');
				$this->_view->set('breadcrumb', '<a href="./">Home</a><i>/</i>Contact');
				$this->_view->set('navactive', 'contact');
				$this->_view->set('success', 'We have received your message. We will get back to you as soon as possible.');
				return $this->_view->output();
			}
		} catch (Exception $e) {
            $this->_setView('index');
            $this->_view->set('title', 'Contact - Error');
            $this->_view->set('formData', $_POST);
			$this->_view->set('saveError', $e->getMessage());
		}
			
	}
}