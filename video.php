<?php
interface videointerface {
    function getname();
    function getsource();
    function geturl();
}

abstract class videoimplement implements videointerface {
    private $name; 
    private $url;
    private $source;

     function getname() {
        return $this->name;
    }

     function getsource() {
        return $this->source;
    }
     function geturl():string {
        return $this->url;
    }

    public function implementiframe() {
        return "";
    }
    
}





?>