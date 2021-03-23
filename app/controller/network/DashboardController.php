<?php
namespace app\controller\network;
defined('BASEPATH') or exit ('No direct access');

class DashboardController extends \app\controller\network\NetworkController{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        echo 'i am the dashboard';
    }

    public function test(){
        echo 'ini adalah test';
    }
    

}
