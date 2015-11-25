<?php

class Error extends Controller {

    function __construct() {
        parent::__construct(); 
    }
    
    function index() {
        $this->view->title = '404 Error';
        $this->view->msg = 'This page doesnt exist';
        
        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
    }
    
    function unauthorized() {
        $this->view->title = '401 Error';
        $this->view->msg = 'You are not authorized for this page!';
        
        $this->view->render('header');
        $this->view->render('error/index');
        $this->view->render('footer');
    }

}