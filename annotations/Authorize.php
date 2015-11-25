<?php

class Authorize extends Annotation
{
    public function __construct()
    {
        Auth::handleLogin();
    }
}
