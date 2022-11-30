<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    function register(){
      return view('registerCompany');
    }
    function doregister(){

    }
    function login(){
    return view('loginCompany');
    }
    function dologin(){

    }
}
