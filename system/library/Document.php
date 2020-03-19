<?php


namespace Library;


class Document
{
    private $title;
    private $description;
    private $keywords;
    private $links = [];
    private $styles = [];
    private $scripts = [];

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function getKeywords() {
        return $this->keywords;
    }

    public function addLink($href, $rel = 'stylesheet', $type = '') {
        $this->links[$href] = [
            'href' => $href,
            'rel'  => $rel,
            'type' => $type
        ];
    }

    public function getLinks() {
        return $this->links;
    }

    public function addStyles($href, $rel = 'stylesheet', $media = 'screen') {
        $this->styles[$href] = [
            'href'  => $href,
            'rel'   => $rel,
            'media' => $media
        ];
    }

    public function getStyles() {
        return $this->styles;
    }

    public function addScript($href, $position = 'header') {
        $this->scripts[$position][$href] = $href;
    }

    public function getScripts($position = 'header') {
        if (isset($this->scripts[$position])) {
            return $this->scripts[$position];
        } else {
            return [];
        }
    }
}