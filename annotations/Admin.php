<?php

class Admin extends Annotation
{
    public function __construct()
    {
        $session = new Session();
        if($session->loggedIn)
        {
            if($session->role != "admin")
            {
                header('location: /dashboard/unauthorized');
            }
        }
        else 
        {
            Auth::handleLogin();
        }
    }
}