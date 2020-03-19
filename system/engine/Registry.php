<?php


namespace Engine;


final class Registry
{
    private $data = [];

    public function get($key) {
        return $this->has($key) ? $this->data[$key] : null;
    }

    public function set($key, $value) {
        $this->data[$key] = $value;
    }

    public function has($key) {
        return isset($this->data[$key]);
    }
}