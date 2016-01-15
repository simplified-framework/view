<?php

use Simplified\View\View;

function view($template, array $data = array()) {
    $view = new View();
    return $view->render($template, $data);
}