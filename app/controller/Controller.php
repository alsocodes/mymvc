<?php 
namespace app\controller;
defined('BASEPATH') or exit ('No direct access');

class Controller
{
    protected $base_url;
    
    public function __construct() 
    {
        $this->base_url = 'http://localhost/favortest/';
    }

    public function base_url(){
        return $this->base_url;
    }

    public function loadView($view, $data = []){
        extract($data);

        // Require the file
        ob_start();

        if(!is_array($view))
            require('./view/'.$view.'.php');
        else{
            foreach($view as $v){
                require('./view/'.$v.'.php');
            }
        }

        // Return the string
        $strView = ob_get_contents();
        ob_end_clean();

        echo $strView;
    }
}
