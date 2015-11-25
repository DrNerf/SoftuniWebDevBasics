<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        //Auth::handleLogin();
    }
    
    /**
     * @Authorize
     */
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
    
    function unauthorized()
    {
        $this->view->title = 'Error';
        
        $this->view->render('header');
        $this->view->render('dashboard/unAuthorized');
        $this->view->render('footer'); 
    }
    /**
     * @Admin
     */
    function adminsplace()
    {
        $this->view->title = 'Admins place';
        
        $this->view->render('header');
        $this->view->render('dashboard/adminsplace');
        $this->view->render('footer'); 
    }
}