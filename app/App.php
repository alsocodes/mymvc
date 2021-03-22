<?php
defined('BASEPATH') or exit ('No direct access'); 
/*
Main class App
*/
include './vendor/autoload.php';

class App
{
    public $router;

    public function __construct()
    {
        $this->router = new \Bramus\Router\Router;
    }

    public function run()
    {
        $this->router->set404(function() {
            header('HTTP/1.1 404 Not Found');
            // ... do something special here
            echo 'iam here';
        });
        
        // Verifikasi Auth
        $this->router->before('GET|POST','(.*)', function(){
            //echo 'iam here not auth';
            // require $srvRoot . '/auth-stack.php';
        });
        
        // Dashboard
        $this->router->get('/', function() {
            //echo 'iam here dashboard';
            require './app/DashboardController.php';
            $controller = new DashboardController();
            $controller->index();
            // $this->includeWithAssets($srvRoot . 'dashboard.php');
        });

        $this->router->run();
    }

    public function loadView(){
        echo 'i am view loader';
    }
    
}