<?php
require './app/database.php';
class DashboardController extends App
{
    
    public function __construct()
    {
        // echo 'i am constructor of Dashboard controller';
        // $db = new Database();
        // $db->test();
        //$this->loadView();
    }

    public function index(){
        echo 'you are on index';
    }

}
