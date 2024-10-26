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

class youtubevideo extends videoimplement {
    function implementiframe():string
    {
        return '<iframe width="420" height="315" src="' . $this->url . '" title="' . $this->name . '"></iframe>
        <figcaption>' . $this->source . '</figcaption>';
    }
}


class vimeovideo extends videoimplement {
    function implementiframe(): string
    {
        return '<iframe width="420" height="315" src="' . $this->url . '" title="' . $this->name . '"></iframe>
        <figcaption>' . $this->source . '</figcaption>';
    }

    }
?>