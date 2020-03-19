<?php


class ControllerMainHeader extends \Engine\Controller
{
    public function index() {
        return $this->load->view('main/header', []);
    }
}