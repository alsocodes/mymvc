<?php
namespace app\controller\frontend;
defined('BASEPATH') or exit ('No direct access');

class FrontendController extends \app\controller\Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function loadTemplate($view, $data = []){
        $views = [
            'frontend/template/header',
            $view,
            'frontend/template/footer'
        ];

        $this->loadView($views,$data);
    }
}