<?php
class Stylesheet {
    private static $stylesMain = array(
        "css/head.css", 
        "css/navigation.css",
        "css/foot.css"
    );
    public $stylesAdded = array();
    
    public function __construct($a = "",$b = "", $c = "",$d = "",$e = "",$f = "",$g = "",$h = ""){
        array_push($this->stylesAdded,$a,$b,$c,$d,$e,$f,$g,$h);
        foreach($this::$stylesMain as $styles){
            echo '<link rel="stylesheet" href="' . $styles . '" type="text/css">';
        }
        foreach ($this->stylesAdded as $links){
            if($links == null){
                continue;
            } else {
             echo '<link rel="stylesheet" href="css/' . $links . '.css" type="text/css">';    
            }
        }
    }
    
}



?>