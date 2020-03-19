<?php


class ControllerMainDashboard extends \Engine\Controller
{
    public function index() {
        $this->addMeta();
        $this->addStyles();
        $this->addScript();

        $data['header'] = $this->load->controller('main/header');
        $data['footer'] = $this->load->controller('main/footer');
        $data['column_left'] = $this->load->controller('main/column_left');
        $this->response->setOutput($this->load->view('main/dashboard', $data));
    }

    private function addMeta() {
        $this->document->setTitle("Dashboard");
    }

    private function addStyles() {
        //Favicon
        $this->document->addLink('/favicon.ico', "icon", 'image/x-icon');

        //Google Fonts
        $this->document->addLink('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
        $this->document->addLink('https://fonts.googleapis.com/icon?family=Material+Icons');

        //Bootstrap Core Css
        $this->document->addStyles('/admin/assets/plugins/bootstrap/dist/css/bootstrap.css');
        //Animate.css Css
        $this->document->addStyles('/admin/assets/plugins/animate-css/animate.css');
        //Font Awesome Css
        $this->document->addStyles('/admin/assets/plugins/font-awesome/css/font-awesome.min.css');
        //iCheck Css
        $this->document->addStyles('/admin/assets/plugins/iCheck/skins/flat/_all.css');
        //Switchery Css
        $this->document->addStyles('/admin/assets/plugins/switchery/dist/switchery.css');
        //Metis Menu Css
        $this->document->addStyles('/admin/assets/plugins/metisMenu/dist/metisMenu.css');
        //Pace Loader Css
        $this->document->addStyles('/admin/assets/plugins/pace/themes/white/pace-theme-flash.css');
        //Custom Css
        $this->document->addStyles('/admin/assets/css/style.css');
        //AdminBSB Themes. You can choose a theme from css/themes instead of get all themes
        $this->document->addStyles('/admin/assets/css/themes/allthemes.css');
        //Demo Purpose Only
        $this->document->addStyles('/admin/assets/css/demo/setting-box.css');
    }

    private function addScript() {
        //Jquery Core Js
        $this->document->addScript('/admin/assets/plugins/jquery/dist/jquery.min.js', 'footer');
        //Bootstrap Core Js
        $this->document->addScript('/admin/assets/plugins/bootstrap/dist/js/bootstrap.min.js', 'footer');
        //Pace Loader Js
        $this->document->addScript('/admin/assets/plugins/pace/pace.js', 'footer');
        //Screenfull Js
        $this->document->addScript('/admin/assets/plugins/screenfull/src/screenfull.js', 'footer');
        //Metis Menu Js
        $this->document->addScript('/admin/assets/plugins/metisMenu/dist/metisMenu.js', 'footer');
        //Jquery Slimscroll Js
        $this->document->addScript('/admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.js', 'footer');
        //Switchery Js
        $this->document->addScript('/admin/assets/plugins/switchery/dist/switchery.js', 'footer');
        //Custom Js
        $this->document->addScript('/admin/assets/js/admin.js', 'footer');
        $this->document->addScript('/admin/assets/js/pages/examples/blank-page.js', 'footer');

        //Google Analytics Code
        //$this->document->addScript('/admin/assets/js/google-analytics.js', 'footer');
        //Demo Purpose Only
        //$this->document->addScript('/admin/assets/js/demo.js', 'footer');
    }
}