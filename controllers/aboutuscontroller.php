<?php

class AboutusController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'ZunaWeb About US');
		$this->_view->set('keyword','ZunaWeb About Page');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'About US');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i> / </i>About US');
		$this->_view->set('navactive', 'aboutus');
		return $this->_view->output();
	}
	
}