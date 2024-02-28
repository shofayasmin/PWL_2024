<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Welcome';
    }

    public function about(){
        return 'Name: shofa yasmin fauziah <br> NIM: 2241720108';
    }
    
    public function articles($id){
        return 'Article Page with Id'. $id;
    }
}
