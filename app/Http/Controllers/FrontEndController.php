<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FrontEndController extends Controller{
    public function getIndex(){
        return view('main.index');
    }
    public function getAbout(){
        return view('main.about');
    }
}
