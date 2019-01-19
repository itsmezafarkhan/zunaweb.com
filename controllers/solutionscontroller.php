<?php

class SolutionsController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'ZunaWeb Solutions');
		$this->_view->set('keyword','ss');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Solutions');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i> / </i>Solutions');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
	public function custom_application_development()
	{
		$this->_view->set('title', 'Custom Application Development');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Custom Application Development');
		$this->_view->set('breadcrumb', '<a href="../">Home</a><i> / </i><a href="./">Solutions</a><i> / </i>Custom Application Development');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
	public function website_development()
	{
		$this->_view->set('title', 'Website Development');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Website Development');
		$this->_view->set('breadcrumb', '<a href="../">Home</a><i> / </i><a href="./">Solutions</a><i> / </i>Website Development');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
	public function ecommerce_solutions()
	{
		$this->_view->set('title', 'Ecommerce Solutions');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Ecommerce Solutions');
		$this->_view->set('breadcrumb', '<a href="../">Home</a><i> / </i><a href="./">Solutions</a><i> / </i>Ecommerce Solutions');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
	public function content_management_solutions()
	{
		$this->_view->set('title', 'Content Management Solutions');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Content Management Solutions');
		$this->_view->set('breadcrumb', '<a href="../">Home</a><i> / </i><a href="./">Solutions</a><i> / </i>Content Management Solutions');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
	public function web_and_graphic_design()
	{
		$this->_view->set('title', 'Web and Graphic Design');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Web and Graphic Design');
		$this->_view->set('breadcrumb', '<a href="../">Home</a><i> / </i><a href="./">Solutions</a><i> / </i>Web and Graphic Design');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
	public function mobile_webiste_development()
	{
		$this->_view->set('title', 'Mobile Website Development');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Mobile Website Development');
		$this->_view->set('breadcrumb', '<a href="../">Home</a><i> / </i><a href="./">Solutions</a><i> / </i>Mobile Website Development');
		$this->_view->set('navactive', 'solutions');
		return $this->_view->output();
	}
	
}