<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
    }
    
    function index() 
    {    
        $this->view->title = 'Dashboard';
        
        $this->view->render('header');
        $this->view->render('dashboard/index');
        $this->view->render('footer');
    }
    
    function logout()
    {
        Session::destroy();
        header('location: ' . URL .  'login');
        exit;
    }
}