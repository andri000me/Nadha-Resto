<?php

class home extends Route{

    public function index()
    {     
        $this -> bind('/home/home');   
    }

    public function selfservice()
    {
        $this -> bind('/home/selfService');
    }

}