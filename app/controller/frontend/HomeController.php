<?php 
namespace app\controller\frontend;
defined('BASEPATH') or exit ('No direct access');

class HomeController extends \app\controller\frontend\FrontendController{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        // var_dump($this->base_url());
        $data = [
            'page_title' => 'THEFAVORED-ONE',
            'nama'       => 'thefavoredone-admin'
        ];
        $this->loadTemplate('frontend/home',$data);
    }
}