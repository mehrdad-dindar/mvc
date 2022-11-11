<?php
class Core{
    protected $CurrentController = "Home";
    protected $CurrentMethode = "index";
    protected $params = [];

    public function __construct()
    {
        var_dump( $this->getUrl() );
    }


    public function getUrl(){
        $url = rtrim($_GET["url"],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        return explode('/',$url);
    }
}