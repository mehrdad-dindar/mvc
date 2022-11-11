<?php
class Core{
    protected $CurrentController = "Home";
    protected $CurrentMethode = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();
        // For Controller
        if (file_exists("../app/controllers/".ucwords($url[0]).".php")){
            $this->CurrentController = ucwords($url[0]);
            unset($url[0]);
        }
        require_once "../app/controllers/".$this->CurrentController.".php";
        $this->CurrentController = new $this->CurrentController;
        // For Methode
        if (method_exists($this->CurrentController,$url[1])){
            $this->CurrentMethode = $url[1];
            unset($url[1]);
        }
        // For params
        $this->params = $url ? array_values($url) : [];
        // final
        call_user_func_array([$this->CurrentController,$this->CurrentMethode],$this->params);
    }


    public function getUrl(){
        $url = rtrim($_GET["url"],'/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        return explode('/',$url);
    }
}