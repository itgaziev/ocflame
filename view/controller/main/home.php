<?php


class ControllerMainHome extends \Engine\Controller
{
    public function index() {
        $data['header'] = $this->load->controller('main/header');
        $data['footer'] = $this->load->controller('main/footer');
        $this->response->setOutput($this->load->view('main/home', $data));
    }
}