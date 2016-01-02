<?php

namespace Simplified\View;

interface ViewRendererInterface {
    public function render($template, $data = array());
}