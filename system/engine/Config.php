<?php


namespace Engine;


class Config
{
    private $data = [];

    public function get($key) {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    public function has($key) {
        return isset($this->data[$key]);
    }

    public function load($filename) {
        $file = CONFIG . $filename . '.php';

        if (file_exists($file)) {
            $_ = [];

            require ($file);

            $this->data = array_merge($this->data, $_);
        } else {
            trigger_error('Error: Could not load config ' . $filename . '!');
            exit();
        }


    }
}