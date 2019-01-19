<?php

class CoderController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'Coder');
		$this->_view->set('pagetitle', 'Coder');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i>/</i>Coder');
		$this->_view->set('navactive', 'coder');
		
		$gobj = new GlobalClass();
	    $gobj->addinfo('this');	
		
		return $this->_view->output();
	}
	
    public function userview()
	{
		$this->_view->set('title', 'ZunaWeb Privacy Policy');
		$this->_view->set('pagetitle', 'Privacy Policy');
		$this->_view->set('breadcrumb', '<a href="./">Home</a> <i>/</i> Privacy Policy');
		$this->_view->set('navactive', 'home');
		$gobj = new GlobalClass();
		$hitinfodetails = $gobj->getHitInfoDetails();					
		$this->_view->set('hitinfodetails', $hitinfodetails);	
		
		return $this->_view->output();
	}
	
	
	public function messages()
	{
		return $this->_view->output();
	}
	
	/***********LOGIN*************/
	public function login()
	{
		try
		{
			if (!empty($_SESSION['user_name']) && ($_SESSION['user_logged_in'] == 1)) 
			{
				//header( 'Location: '.URL.'admin/' ) ; 
				$this->_setView('index');
			}
			else
			{
				$this->_setView('login');
			}
			return $this->_view->output();	
		}
		catch(Exception $e)
		{
			echo '<h1>Application error:</h1>' . $e->getMessage();
		}
	}	
	
	public function loginWithPostData() 
	{
		$errors = array();
		$check = true;
		//header( 'Location: '.URL.'login/redirect' ) ; 
		$userDetails = $this->_model->getUserDetails($_POST['user_name']);
		
		try
		{
			if (crypt($_POST['user_password'], $userDetails['user_password_hash']) == $userDetails['user_password_hash']) 
			{
				/**
				 *  write user data into PHP SESSION [a file on your server]
				 */
				$_SESSION['user_name'] = $userDetails['user_name'];
				$_SESSION['user_email'] = $userDetails['user_email'];
				$_SESSION['user_id'] = $userDetails['user_id'];
				$_SESSION['user_logged_in'] = 1;
				
				/**
				 *  write user data into COOKIE [a file in user's browser]
				 */
				setcookie("user_name", $userDetails['user_name'], time() + (3600*24*100));
				setcookie("user_email", $userDetails['user_email'], time() + (3600*24*100));
				//$this->_setView('index');
				//return $this->_view->output();			
				header( 'Location: '.URL.'coder/' ) ; 
			}
			else 
			{
				$check = false;
				array_push($errors, "Wrong password. Try again.");
				$this->_setView('login');
				$this->_view->set('title', 'Login - Wrong Password!');
				$this->_view->set('errors', $errors);
				$this->_view->set('formData', $_POST);
				return $this->_view->output();		
			}  
		}
		catch(Exception $e)
		{
			$check = false;
			array_push($errors, "This user does not exist.");
			array_push($errors, $e->getMessage());
			$this->_setView('redirect');
			$this->_view->set('title', 'User does not exist');
			$this->_view->set('errors', $errors);
			$this->_view->set('formData', $_POST);
			return $this->_view->output();
		}
		
    }	
	
	/* This function - ?*/
	private function loginWithSessionData() 
	{        
        $this->user_is_logged_in = true;        
    }
	
	/*call method to logout user*/
	public function logout() 
	{        
		$_SESSION = array();
		session_destroy();
		$this->user_is_logged_in = false;
		$this->_setView('login');
		$this->_view->set('title', 'Login Page!');
		return $this->_view->output();
    }
    
    /*check if user is logged-in*/
    public function isUserLoggedIn() 
	{        
        return $this->user_is_logged_in;        
    }
	
	/*Encrypt Password*/
	public function encryptPassword()
	{
		$length = CRYPT_SALT_LENGTH;
		$hashing_algorithm = '$2a$10$';
		$options = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789./';
		$salt = '';

		for ($i = 0; $i <= $length; $i ++) {
			$options = str_shuffle ( $options );
			$salt .= $options [rand ( 0, 63 )];
		}
		return crypt ( $this->password, $hashing_algorithm . $salt ); 
	}
	/*check user access for a module*/
	public function checkAccess($module)
	{
		$moduleaccessdata = $this->_model->checkSideBarAccess($_SESSION['user_id']);
		//print_r($moduleaccessdata);
		$this->_view->set('moduleaccessdata', $moduleaccessdata);
			
		if(!$this->_model->checkUserAccess($_SESSION['user_id'],$module))
		{			
			$this->_setView('index');
			$this->_view->set('error', 'No Access to '.$module.'!');
			return $this->_view->output();
		}
	}
	
}