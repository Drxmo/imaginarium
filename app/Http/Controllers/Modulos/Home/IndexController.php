<?php

namespace App\Http\Controllers\Modulos\Home;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;

class IndexController extends Controller
{
    function getIndex(){
    	return view('Modulos.Home.index');
    }
}