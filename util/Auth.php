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
        $logged = $_SESSION['loggedIn'];
        if ($logged) {
            $user = new User_Model();
            return $user->userSingleList(Session::get("userid"));
        }
    }
    
}