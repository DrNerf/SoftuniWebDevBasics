<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run($userData)
    {
        if(!isset($userData))
        {
           $sth = $this->db->prepare("SELECT userid, role, login FROM user WHERE 
                login = :login AND password = :password");
            $sth->execute(array(
                ':login' => $_POST['login'],
                ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
            ));

            $data = $sth->fetch();

            $count =  $sth->rowCount();
            if ($count > 0) {
                // login
                Session::init();
                Session::set('role', $data['role']);
                Session::set('loggedIn', true);
                Session::set('userid', $data['userid']);
                Session::set('username', $data['login']);
                header('location: ../dashboard');
            } else {
                header('location: ../login');
            } 
        }
        else
        {
            $sth = $this->db->prepare("SELECT userid, role, login FROM user WHERE 
                login = :login AND password = :password");
            $sth->execute(array(
                ':login' => $userData['login'],
                ':password' => Hash::create('sha256', $userData['password'], HASH_PASSWORD_KEY)
            ));

            $data = $sth->fetch();

            $count =  $sth->rowCount();
            if ($count > 0) {
                // login
                Session::init();
                Session::set('role', $data['role']);
                Session::set('loggedIn', true);
                Session::set('userid', $data['userid']);
                Session::set('username', $data['login']);
            }
        }
        
    }
    
    public function registerUser($data)
    {
        $this->db->insert('user', array(
            'login' => $data['login'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => "default"
        ));
        $this->run($data);
    }
    
}