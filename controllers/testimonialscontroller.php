<?php

class TestimonialsController extends Controller
{
	public function __construct($model, $action)
	{
		parent::__construct($model, $action);
		$this->_setModel($model);
	}
	
	public function index()
	{
		$this->_view->set('title', 'Testimonials - ZunaWeb');
		$this->_view->set('keyword','');
		$this->_view->set('description','');
		$this->_view->set('pagetitle', 'Testimonials');
		$this->_view->set('breadcrumb', '<a href="./">Home</a><i> / </i>Testimonials');
		$this->_view->set('navactive', 'testimonials');
		return $this->_view->output();
	}
	
}