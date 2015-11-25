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
        @session_start();
        $this->session = new Session();
        $this->cookie = new Cookie();
    }
     
    public $session;

    public $cookie;


    public function getUser()
    {
        return Auth::getUser();
    }
    
    public function getRequestUrl()
    {
        return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }
}