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
 * @author Alzate&DRX
 */
class SitiosController extends controller{
   
    function getIndexx(){
        return view('Modulos.Sitios.sitdetalle_1');
        
    }
    
    function getIndex(){
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE bdp_imagen.sit_id = bdp_sitio.sit_id");
        //$sitios = $sitios[0];
        
        return view('Modulos.Sitios.sitio', compact('sitios'));
    }
    function getIndexxx(){
        
         $nombre = "Administrador";
        $categorias = DB::select("SELECT * FROM bdp_categoria");
       
        $sub_subcategorias = array();
        return view('Modulos.Sitios.crearsitio', compact("categorias", "subcategorias", "sub_subcategorias"));
    }
function postIndexxx(){
     $sitio = filter_input_array(INPUT_POST)['sitio'];
        extract($sitio);

//    $nombre = $_POST['nombre'];
//    $apellido = $_POST['apellido'];

        
//      'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';
            $sitios = DB::select('SELECT IFNULL(MAX(sit_id),0)+1 AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
            $new_arr[] = null;
            foreach ($sitios as $sitio) {
                $new_arr[] = $sitio->id;
            }
            $sit_id=  implode($new_arr);
//            print_r($res_arr);
        

        
//      
       
        
         
                  
            DB::insert("INSERT INTO bdp_sitio "
                    . "( sit_nombre , sit_descripcion, cat_id, subcat_id, sub_subcat_id,"
                    . " sit_direccion, sit_latitud, sit_longitud, est_id, sit_facebook, sit_twitter,"
                    . " sit_google_plus, usu_id ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)", array( $nombre,
                $descripcion, $cat_id, $subcat_id, $sub_subcat_id, $direccion, $latitud, $longitud, $activado, $facebook, $twitter, $google, $usu_id));


              DB::insert("INSERT INTO bdp_imagen "
                    . "( sit_id , img_ruta ) VALUES (?,?)", array( $sit_id,
                $img));

            

            Session::put('success', 'Usuario creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

            return redirect(url("/sitios/sitios/index") );
        
    }
    
}
    

