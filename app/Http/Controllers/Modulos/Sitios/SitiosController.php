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
        
$target_dir =  dirname(getcwd());

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
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
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
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
                'hola'));

            

            Session::put('success', 'Usuario creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

            return redirect(url("/sitios/sitios/index") );
        
    }
    
}
    

