<?php

namespace Ebumba;

use Rain\Tpl;

class Page {

    public function __construct(){
        $config = array(
        "tpl_dir"       => $_SERVER["DOCUMENT_ROOT"]."/views/",
        "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
    
        );

    Tpl::configure( $config );
    }  

    public function __destruct(){

    }

}
?>