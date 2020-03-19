<?php


class ControllerMainHeader extends \Engine\Controller
{
    public function index() {

        $data['title'] = $this->document->getTitle();
        $data['links'] = $this->document->getLinks();
        $data['styles'] = $this->document->getStyles();
        $data['scripts'] = $this->document->getScripts();
        return $this->load->view('main/header', $data);
    }
}