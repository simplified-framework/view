<?php

namespace Simplified\View;

class ViewRenderer implements ViewRendererInterface {

    public function render($template, $data = array()) {
        $filePath = str_replace(".", "/", $template);
        require RESOURCES_PATH . "views/" . $filePath .".php";
    }
}