<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController{
    public function index (){
        // return "mi primer controlador ";
        return view ("Test/index")->with ('title', 'mi primer app con laravel');
    }

}