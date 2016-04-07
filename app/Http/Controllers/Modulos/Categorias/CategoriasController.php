<?php
namespace App\Http\Controllers\Modulos\Categorias;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Session;
use DB;



/**
 * Description of CategoriasController
 *
 * @author Carvajal&Drx
 */
class CategoriasController extends controller {
    
    function getCategoria(){
    return view('Modulos.Categorias.categoria');    
    }
    
    function getCrear(){
        $nombre = "Administrador";
        $categorias = DB::select("SELECT * FROM bdp_categoria");
       
        $sub_subcategorias = array();
     
        return view('Modulos.Categorias.crearcategoria', compact("categorias", "subcategorias", "sub_subcategorias"));
    }
    function postCrear() {
        $categoria = filter_input_array(INPUT_POST)['categoria'];
        extract($categoria);

//    $nombre = $_POST['nombre'];
//    $apellido = $_POST['apellido'];
//      'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';
        $categorias = DB::select('SELECT IFNULL(MAX(cat_id),0)+1 AS id FROM bdp_categoria ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr[] = null;
        foreach ($categorias as $categoria) {
            $new_arr[] = $categoria->id;
        }
        $cat_id = implode($new_arr);
//            print_r($res_arr);
//      'SELECT IFNULL(MAX(dus_id),0)+1 AS id FROM bdp_dato_usuario ORDER BY id DESC LIMIT 1';
        $sub_categoria = DB::select('SELECT IFNULL(MAX(subcat_id),0)+1 AS id FROM bdp_subcategoria ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr2[] = null;
        foreach ($categorias as $categoria) {
            $new_arr2[] = $categoria->id;
        }
        $dus_id = implode($new_arr2);
//            print_r($res_arr);
        
        $sub_sub_categoria = DB::select('SELECT IFNULL(MAX(subcat_id),0)+1 AS id FROM bdp_sub_subcategoria ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr2[] = null;
        foreach ($categorias as $categoria) {
            $new_arr2[] = $categoria->id;
        }
        $dus_id = implode($new_arr2);
//            print_r($res_arr);





        


            DB::insert("INSERT INTO bdp_categoria "
                    . "( cat_id, cat_nombre, cat_activo"
                    . " ) VALUES (?,?,?)", array($cat_id, 
             $cat_nombre, $activado,));

            

            Session::put('success', 'categoria creada exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

            return redirect(url("categorias/categorias/listar"));
    
        }
    

    
    
    function getListar() {

        $categorias = DB::select("SELECT * FROM bdp_categoria");
       


        return view('Modulos.Categorias.listarcategoria', compact("categorias"));
    }
    function getListarsub($id) {

        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $subcategoria4 = DB::select("SELECT * FROM bdp_subcategoria");
       
        
        $nombre = "Administrador";
        

        $sub_categorias = DB::select("SELECT * FROM bdp_subcategoria WHERE cat_id = ?", array($id));
        
        $sub_categorias = $sub_categorias[0];
        

//        return view('Modulos..usuarios.editar', compact("usuario", "dato_usuario", "nombre", "roles"));
        
        


        return view('Modulos.Categorias.listarsubcategoria', compact("categorias", "sub_categorias", "nombre", "subcategoria4"));
    }
    
    
    
}