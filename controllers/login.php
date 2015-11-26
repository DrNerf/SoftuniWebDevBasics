<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();    
    }
    
    function index() 
    {    
        $this->view->title = 'Login';
        
        $this->view->render('header');
        $this->view->render('login/index');
        $this->view->render('footer');
    }
    
    function loginRun()
    {
        $this->model->run();
    }
    
    function register() 
    {    
        $this->view->title = 'Register';
        
        $this->view->render('header');
        $this->view->render('login/register');
        $this->view->render('footer');
    }
    
    function registerRun()
    {
        $data = array();
        $data['login'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        
        $this->model->registerUser($data);
        header('location: ' . URL . 'index');
    }

}