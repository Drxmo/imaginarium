<?php

namespace App\Http\Controllers\Modulos\Sitios;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Session;
use DB;


/**
 * Description of SitiosController
 *
 * @author Alzate&DRX
 */
class SitiosController extends controller {

    function getVersitio($id) {
        $nombre = "Administrador";
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $sub_subcategorias = array();
        $sitio = DB::select("SELECT * FROM bdp_sitio WHERE sit_deleted_at IS NULL AND est_id = '1' AND sit_id = ?", array($id));
        $imagenes = DB::select("SELECT img_id, sit_id, img_ruta FROM bdp_imagen WHERE sit_id = ?", array($id));

       // $sitio = $sitio[0];
        //$img = $img[0];
        
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
//        $new_arr[] = null;
//        foreach ($img as $imagen) {
//            $new_arr[] = $imagen;
//        }
//        $img_ruta = implode($new_arr);
//        print_r($img_ruta);
        
        
        
        
        return view('Modulos.Sitios.versitio', compact("categorias", "subcategorias", "sub_subcategorias", "sitio", "img_ruta", "img", "imagenes", "id"));
    }

    function getIndex() {
        
        $sitios = DB::select("SELECT * FROM bdp_sitio, bdp_imagen WHERE sit_deleted_at IS NULL AND est_id = '1' AND bdp_imagen.sit_id = bdp_sitio.sit_id");
        //$sitios = $sitios[0];

        return view('Modulos.Sitios.sitio', compact('sitios'));
    }

    function getIndexxx() {
 if (Session::has('user') === true){
        
        $nombre = "Administrador";
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $usuarios = DB::select("SELECT usu_id, usu_usuario FROM bdp_usuario WHERE usu_deleted_at IS NULL AND usu_activado = '1' ");
        $sub_subcategorias = array();
        return view('Modulos.Sitios.crearsitio', compact("categorias", "subcategorias", "sub_subcategorias", "usuarios"));
         
         }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function postIndexxx() {
 if (Session::has('user') === true){
     
      
        $sitio = filter_input_array(INPUT_POST)['sitio'];
        extract($sitio);

//    $nombre = $_POST['nombre'];
//    $apellido = $_POST['apellido'];

        $target_dir = dirname(getcwd());
//print_r($target_dir);
//echo "<br />";
        $target_file = $target_dir."\public\media\img\sitios\\" . basename($_FILES["fileToUpload"]["name"]);
//        print_r($target_file);
        $filename =($_FILES["fileToUpload"]["name"]);
        
//        echo "<br />";
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        
//        print_r($imageFileType);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }

//      'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';
        $sitios = DB::select('SELECT IFNULL(MAX(sit_id),0)+1 AS id FROM bdp_sitio ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
        $new_arr[] = null;
        foreach ($sitios as $sitio) {
            $new_arr[] = $sitio->id;
        }
        $sit_id = implode($new_arr);
//            print_r($res_arr);
//      




        DB::insert("INSERT INTO bdp_sitio "
                . "( sit_id, sit_nombre , sit_descripcion, cat_id, subcat_id, sub_subcat_id,"
                . " sit_direccion, sit_latitud, sit_longitud, est_id, sit_facebook, sit_twitter,"
                . " sit_google_plus, usu_id ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($sit_id, $nombre,
            $descripcion, $cat_id, $subcat_id, $sub_subcat_id, $direccion, $latitud, $longitud, $activado, $facebook, $twitter, $google, $usu_id));

 if (empty($filename)!==true) {
//    $filename =($_FILES["fileToUpload"]["name"]);
        DB::insert("INSERT INTO bdp_imagen "
                . "( sit_id , img_ruta ) VALUES (?,?)", array($sit_id,
            $filename));
 }else{
     DB::insert("INSERT INTO bdp_imagen "
                . "( sit_id , img_ruta ) VALUES (?,'comodin.jpg')", array($sit_id));
 }


       // Session::put('success', 'Usuario creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));
        
        
        return redirect(url("/sitios/sitios/listar") );
             
             
         }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getListar() {
         if (Session::has('user') === true){
        
         if (Session::has('super') === true){
         
        $sitios = DB::select("SELECT * FROM bdp_sitio");
         }else{
             $sitios = DB::select("SELECT * FROM bdp_sitio WHERE sit_deleted_at IS NULL AND usu_id = ?", array(  Session::get('user')  ) );
             //$usuarioI = DB::select("SELECT usu_id FROM bdp_usuario WHERE usu_deleted_at IS NULL AND usu_activado = '1' AND (usu_usuario = ? AND usu_password = ?)", array($user, $pass));
            
         }
         
        return view('Modulos.Sitios.listarsitio', compact("sitios"));
         
         }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function postEditar() {
        $usu = filter_input_array(INPUT_POST)['usu'];
//        extract($sitio);
         if (((Session::has('user') === true) and (Session::get('user') == $usu)) OR (Session::has('super') === true)) {
             $id = filter_input_array(INPUT_POST)['sitid'];
             
      
//        $sitio = filter_input_array(INPUT_POST)['sitio'];
//        extract($sitio);

        $nombre = "Administrador";
        $categorias = DB::select("SELECT * FROM bdp_categoria");
        $sub_subcategorias = array();
        $usuarios = DB::select("SELECT usu_id, usu_usuario FROM bdp_usuario WHERE usu_deleted_at IS NULL AND usu_activado = '1' ");
        $sitio = DB::select("SELECT * FROM bdp_sitio WHERE sit_id = ?", array($id));
        $sitio = $sitio[0];
        return view('Modulos.Sitios.modificarsitio', compact("categorias", "subcategorias", "sub_subcategorias", "sitio", "usuarios"));
         
        }
        
        else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function postUpdate() {
         if (Session::has('user') === true){
               $sitio = filter_input_array(INPUT_POST)['sitio'];
        extract($sitio);
    
        $target_dir = dirname(getcwd());
        $target_file = $target_dir."\public\media\img\sitios\\" . basename($_FILES["fileToUpload"]["name"]);
        
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
// Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
// Check file size
        if ($_FILES["fileToUpload"]["size"] > 1000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }




$perra = "#$";
        DB::update("UPDATE bdp_sitio SET sit_nombre = ?, sit_descripcion = ?, cat_id = ?, subcat_id = ?, sub_subcat_id = ?, sit_direccion = ?, sit_telefono = ?, sit_latitud = ?, sit_longitud = ?, est_id = ?, sit_facebook = ?, sit_twitter = ?, sit_google_plus = ?, usu_id = ? WHERE sit_id = ?", array($nombre, $descripcion, $cat_id, $subcat_id, $sub_subcat_id, $direccion, $telefono, $latitud, $longitud, $activado, $facebook, $twitter, $google, $usu_id, $sit_id));

        Session::flash('success', 'Sitio modificado exitosamente');
        return redirect(url("/sitios/sitios/listar"));
         
        }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getSuspender($id) {
         if (Session::has('user') === true){
       
        $sit_deleted_at = date("Y-m-d\TH:i:s");


        DB::update("UPDATE bdp_sitio SET sit_deleted_at = ? "
                . " WHERE sit_id = ?", array($sit_deleted_at, $id));

        return redirect(url("sitios/sitios/listar"));
         }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

    function getEliminar($id) {
         if (Session::has('user') === true){
             
         
//        DB::delete("DELETE FROM bdp_imagen WHERE sit_id = ?", array($id));
//        DB::delete("DELETE FROM bdp_sitio WHERE sit_id = ?", array($id));
        // DB::update("UPDATE bdp_dato_usuario SET dus_deleted_at = ? WHERE usu_id = ?", array( $usu_deleted_at, $id));

        //return redirect(url("sitios/sitios/listar"));
        return view('Modulos.Sitios.eliminar', compact("id", "dato_usuario"));
         
        }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }
    
    function getBorrar($id) {
       
     
        if (Session::has('super') === true) {
             
         
        DB::delete("DELETE FROM bdp_imagen WHERE sit_id = ?", array($id));
        DB::delete("DELETE FROM bdp_sitio WHERE sit_id = ?", array($id));
        // DB::update("UPDATE bdp_dato_usuario SET dus_deleted_at = ? WHERE usu_id = ?", array( $usu_deleted_at, $id));

        return redirect(url("sitios/sitios/listar"));
        
        }else{
            echo 'Permiso denegado';
            return redirect(url("index"));
        }
    }

}
