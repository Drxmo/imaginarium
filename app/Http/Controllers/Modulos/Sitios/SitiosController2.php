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
    
    function getIndex() {

        $sitios = DB::select("SELECT * FROM bdp_sitio");
        $categoria = DB::select("SELECT * FROM bdp_categoria");
        $subcategoria = DB::select("SELECT * FROM bdp_dato_usuario");
        $sub_subcategoria = DB::select("SELECT * FROM bdp_dato_usuario");


        return view('Modulos.Sitios.index', compact("sitios", "categoria", "subcategoria", "sub_subcategoria"));
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