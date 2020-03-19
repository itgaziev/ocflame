<?php


class ControllerMainColumnLeft extends \Engine\Controller
{
    public function index() {
        return $this->load->view('main/column_left', []);
    }
}