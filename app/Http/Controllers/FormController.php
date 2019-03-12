<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidations;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index(){
    	return view('form');
    }

    public function login(StoreFormValidations $request){
    	return $request->all();
    }
}
