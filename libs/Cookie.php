<?php

class Cookie
{
    public function __get($name) 
    {
        if(isset($_COOKIE[$name]))
        {
            return $_COOKIE[$name];
        }
    }
    
    public function __set($name, $value) 
    {
        setcookie($name, $value);
    }
}
