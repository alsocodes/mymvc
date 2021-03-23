<?php
namespace app;
defined('BASEPATH') or exit ('No direct access'); 
/*
Main class App
*/
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
            // echo 'iam here not auth';
            // require $srvRoot . '/auth-stack.php';
        });
        

        // 
        $this->router->get('/', '\app\controller\frontend\HomeController@index');

        $this->router->run();
    }
    
}