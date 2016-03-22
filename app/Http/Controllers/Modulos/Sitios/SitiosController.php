<?php
namespace App\Http\Controllers\Modulos\Sitios;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Session;

/**
 * Description of SitiosController
 *
 * @author Alzate
 */
class SitiosController extends controller{
   
    function getSitios(){
        return view('Modulos.Sitios.sitio');
    }
    
     function getCrear(){
    return view('Modulos.Sitios.crearsit');    
    }
     function getSitio(){
        return view('Modulos.Sitios.sitdetalles');
    }
    
    
}
//
//class SitioController extends controller{
//    
//   
//    
//}
//
//
//class CrearsitioController extends controller {
//    
//   
//}