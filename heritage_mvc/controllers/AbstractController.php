<?php

abstract class AbstractController {

    public function render(string $view, array $values) : void
    {
        $template=$view;
        $data=$values;
        echo "data";
        var_dump ($data);
        
        require "views/layout.phtml";
    }
}


?>