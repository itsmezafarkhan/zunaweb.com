<?php

class Privacy_policyController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'ZunaWeb Privacy Policy');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Privacy Policy');
		$this->_view->set('breadcrumb', '<a href="./">Home</a> <i>/</i> Privacy Policy');
		$this->_view->set('navactive', 'home');
		return $this->_view->output();
	}
}