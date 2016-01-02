<?php

namespace Simplified\View;

class ViewRenderer implements ViewRendererInterface {

    public function render($template, $data = array()) {
        print "render $template";
    }
}