<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HttpContext
{
    public function __construct() 
    {
         
    }
     
    public function getSession($key)
    {
        Session::get($key);
    }
    
    public function setSession($key, $value)
    {
        Session::set($key, $value);
    }
    
    public function getCookie($coockie)
    {
        if(isset($_COOKIE[$cookie]))
        {
            return $_COOKIE[$cookie];
        }
    }
    
    public function setCookie($key, $value)
    {
        return setcookie($key, $value);
    }
    
    public function getUser()
    {
        return Auth::getUser();
    }
    
    public function getRequestUrl()
    {
        return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
}