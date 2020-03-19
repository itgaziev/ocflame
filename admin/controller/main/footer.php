<?php


class ControllerMainFooter extends \Engine\Controller
{
    public function index() {
        $data['scripts'] = $this->document->getScripts('footer');
        return $this->load->view('main/footer', $data);
    }
}