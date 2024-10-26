<?php
interface videointerface {
    function getname();
    function getsource();
    function geturl();
}

abstract class videoimplement implements videointerface {
    public function __construct(protected $url, protected $name, protected $source)
    {
    }
     function getname() {
        return $this->name;
    }

     function getsource() {
        return $this->source;
    }
     function geturl():string {
        return $this->url;
    }

    abstract public function implementiframe():string;
    
}
?>