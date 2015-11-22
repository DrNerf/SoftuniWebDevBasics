<?php

/**
 * 
 */
class Auth
{
    
    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        if ($logged == false) {
            session_destroy();
            header('location: ../login');
            exit;
        }
    }
    
    public static function getUser()
    {
        @session_start();
        $logged = isset($_SESSION['loggedIn']) ? $_SESSION['loggedIn'] : false;
        if ($logged) {
            require 'models/user_model.php';
            $user = new User_Model();
            return $user->userSingleList(Session::get("userid"));
        }
    }
    
}