<?php

class Session
{
    public function __get($name) {
        return Session::get($name);
    }
    
    public function __set($name, $value) {
        Session::set($name, $value);
    }
    
    public static function init()
    {
        @session_start();
    }
    
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    
    public static function get($key)
    {
        if (isset($_SESSION[$key]))
        return $_SESSION[$key];
    }
    
    public static function destroy()
    {
        //unset($_SESSION);
        session_destroy();
    }
    
}