<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidations;
use Illuminate\Http\Request;
use App;

class FormController extends Controller
{
    public function index($lang=null){
    	app::setlocale($lang);
    	return view('form');
    }

    public function login(StoreFormValidations $request){
    	return $request->all();
    }
}
