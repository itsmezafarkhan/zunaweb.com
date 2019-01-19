<?php

class Terms_of_servicesController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'ZunaWeb Terms of Services');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Terms of Services');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i>/</i>Terms of Services');
		$this->_view->set('navactive', 'home');
		return $this->_view->output();
	}
}