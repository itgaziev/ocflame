<?php


class ControllerMainFooter extends \Engine\Controller
{
    public function index() {
        return $this->load->view('main/footer', []);
    }
}