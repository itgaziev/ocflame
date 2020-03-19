<?php


class ControllerErrorNotFound extends \Engine\Controller
{
    public function index() {
        $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');
        $data['header'] = $this->load->controller('main/header');
        $data['footer'] = $this->load->controller('main/footer');
        $this->response->setOutput($this->load->view('error/not_found', $data));
    }
}