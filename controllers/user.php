<?php

class User extends Controller {

    public function __construct() {
        parent::__construct();
        //Auth::handleLogin();
    }
    /**
     * @Authorize
     * @Admin
     */
    public function index() 
    {    
        $this->view->title = 'Users';
        $this->view->userList = $this->model->userList();
        
        $this->view->render('header');
        $this->view->render('user/index');
        $this->view->render('footer');
    }
    
    /**
     * @Authorize
     * @Admin
     */
    public function create() 
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        
        $this->model->create($data);
        header('location: ' . URL . 'user');
    }
    
    /**
     * @Authorize
     * @Admin
     */
    public function edit($id) 
    {
        $this->view->title = 'Edit User';
        $this->view->user = $this->model->userSingleList($id);
        
        $this->view->render('header');
        $this->view->render('user/edit');
        $this->view->render('footer');
    }
    
    /**
     * @Authorize
     * @Admin
     */
    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];
        
        $this->model->editSave($data);
        header('location: ' . URL . 'user');
    }
    
    /**
     * @Authorize
     * @Admin
     */
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'user');
    }
}