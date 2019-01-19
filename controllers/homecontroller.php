<?php

class HomeController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'ZunaWeb');
		$this->_view->set('keyword','ZunaWeb, ZunaWeb Private Limited, E commerce, Build new website, Design Website, CMS, Custom Application, Content Management Systems, Mobile Websites, CRM, Website Development, PHP, MYSQL, Word press, Joomla');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Home');
		$this->_view->set('breadcrumb', '<a href="./">Home</a>');
		$this->_view->set('navactive', 'home');
		return $this->_view->output();
	}
	
}