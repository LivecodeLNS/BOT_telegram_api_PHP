<?php

class Conex
{
    
    private $token  =    '<TOKEN KEY>';
    private $url    =   'https://api.telegram.org/bot';
    public  function url():string
    {
        
        return("{$this->url}{$this->token}");

    }


}

?>