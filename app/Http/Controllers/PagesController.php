<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

    /*******************************
     *  returns landing index page from view folder
     ******************************/
    public function index() {
        return view('index');
    }


    /*******************************
     *  Gets categories from database
     ******************************/
    public function categories() {
        if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        }

        //get categories and pass it here
        $categories =  DB::select('SELECT * FROM category');
        return view('categories')->with('categories', $categories);
    }


    /*******************************
     *  returns signin in page from view folder
     ******************************/
    public function signin() {
        return view('signIn');
    }


    /*******************************
     *  returns signUp page from view folder
     ******************************/
    public function signup() {
        return view('signUP');
    }
}
