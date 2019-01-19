<?php

class ErrorController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function error404()
	{
		$this->_view->set('title', 'ZunaWeb Error 404');
		$this->_view->set('pagetitle', 'Error 404');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i>/</i> Error 404');
		$this->_view->set('navactive', 'home');
		return $this->_view->output();
	}
}