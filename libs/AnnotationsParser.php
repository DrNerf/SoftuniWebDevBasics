<?php

class AnnotationsParser
{
    public static function scan($className = NULL, $methodName = NULL)
    {
        $backtrace = debug_backtrace();
        if($className == NULL)
        {
            $className = $backtrace[1]['class'];  
        }
        if($methodName == NULL)
        {
            $methodName = $backtrace[1]['function'];
        }
        
        $class = new ReflectionClass($className);
        $method = $class->getMethod($methodName);
        $annotations = null;
        preg_match_all('#@(.*?)\n#s', $method->getDocComment(), $annotations);
        $methodAnnotations = $annotations[1];
        //var_dump($methodAnnotations);
        foreach ($methodAnnotations as $item)
        {
            $path = "annotations/".$item.".php";
            if(file_exists($path))
            {
                require $path;
                new $item;
            }
        }
    }
}

