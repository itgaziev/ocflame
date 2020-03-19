<?php


namespace Engine;


class Template
{
    private $data = [];

    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    public function render($filename, $code = '') {
        $data = $this->data;
        ob_start();
        include $filename . '.php';
        return ob_get_clean();
    }
}