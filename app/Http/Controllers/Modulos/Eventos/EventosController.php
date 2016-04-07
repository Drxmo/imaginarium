<?php

namespace App\Http\Controllers\Modulos\Eventos;

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
class EventosController extends controller {

  function getEvento() {
    $eventos = DB::select("SELECT * FROM bdp_evento, bdp_imagen WHERE bdp_imagen.eve_id = bdp_evento.eve_id");

    return view('Modulos.Eventos.evento', compact("eventos"));
  }

  function getEventodetalle() {
    $evento = DB::select("SELECT * FROM bdp_evento, bdp_imagen WHERE bdp_imagen.eve_id = bdp_evento.eve_id");
    //$sitios = $sitios[0];

    return view('Modulos.Eventos.eventodetalle', compact("eventos"));
  }

  function getCrear() {

    $nombre = "Administrador";
    $categorias = DB::select("SELECT * FROM bdp_categoria");

    $sub_subcategorias = array();
    return view('Modulos.eventos.crearevento', compact("categorias", "subcategorias", "sub_subcategorias", "eventos"));
  }

  function postIndexxx() {
    $evento = filter_input_array(INPUT_POST)['evento'];
    extract($evento);

//    $nombre = $_POST['nombre'];
//    $apellido = $_POST['apellido'];
//      'SELECT IFNULL(MAX(usu_id),0)+1 AS id FROM bdp_usuario ORDER BY id DESC LIMIT 1';
    $eventos = DB::select('SELECT IFNULL(MAX(eve_id),0)+1 AS id FROM bdp_evento ORDER BY id DESC LIMIT 1');
//            . "SELECT dus_nombre FROM bdp_dato_usuario WHERE usu_id = ?", array($id));
    $new_arr[] = null;
    foreach ($eventos as $evento) {
      $new_arr[] = $evento->id;
    }
    $eve_id = implode($new_arr);
//            print_r($res_arr);
//      

    $target_dir = realpath(dirname(getcwd()));

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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




    DB::insert("INSERT INTO bdp_evento "
            . "( eve_nombre , eve_descripcion, cat_id, subcat_id, sub_subcat_id,"
            . " eve_direccion, eve_latitud, eve_longitud, est_id, eve_facebook, eve_nombre_contacto,"
            . " eve_correo_contacto, eve_telefono_contacto, eve_valor_boleta, fecha_inicio_publicacion, fecha_fin_publicacion, usu_id ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array($nombre,
        $descripcion, $cat_id, $subcat_id, $sub_subcat_id, $direccion, $latitud, $longitud, $activado, $facebook, $nombre_contacto, $correo_contacto, $telefono_contacto, $valor_boleta, $fecha_inicio_publicacion, $fecha_fin_publicacion, $usu_id));


    DB::insert("INSERT INTO bdp_imagen "
            . "( eve_id , img_ruta ) VALUES (?,?)", array($eve_id,
        'hola'));



    Session::put('success', 'Evento creado exitosamente');

//    DB::insert("INSERT INTO usuario (nombre, apellido) VALUES(?,?)", array($nombre, $apellido));

    return redirect(url("/eventos/eventos/listar"));
  }

  function getListar() {
    $eventos = DB::select("SELECT * FROM bdp_evento");
    return view('Modulos.Eventos.listarevento', compact("eventos"));
  }

  function getEditar($id) {
    $nombre = "Administrador";
    $categorias = DB::select("SELECT * FROM bdp_categoria");
    $sub_subcategorias = array();
    $evento = DB::select("SELECT * FROM bdp_evento WHERE eve_id = ?", array($id));
    $evento = $evento[0];
    return view('Modulos.Eventos.editarevento', compact("categorias", "subcategorias", "sub_subcategorias", "evento"));
  }

  function postEditar() {
    $target_dir = dirname(getcwd());

    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
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



    $evento = filter_input_array(INPUT_POST)['evento'];
    extract($evento);

    DB::update("UPDATE bdp_evento SET eve_nombre = ?, eve_descripcion = ?, cat_id = ?, subcat_id = ?, sub_subcat_id = ?, eve_direccion = ?, eve_latitud = ?, eve_longitud = ?, est_id = ?, eve_facebook = ?, eve_nombre_contacto = ?, eve_correo_contacto = ?, eve_telefono_contacto = ?, eve_valor_boleta = ?, fecha_inicio_publicacion = ?, fecha_fin_publicacion = ?, usu_id = ? WHERE eve_id = ?", array($nombre, $descripcion, $cat_id, $subcat_id, $sub_subcat_id, $direccion, $latitud, $longitud, $activado, $facebook, $nombre_contacto, $correo_contacto, $telefono_contacto, $valor_boleta, $fecha_inicio_publicacion, $fecha_fin_publicacion, $usu_id, $eve_id));

    Session::put('success', 'Evento editado exitosamente');
    return redirect(url("/eventos/eventos/listar"));
  }

  function getSuspender($id) {
    $eve_deleted_at = date("Y-m-d\TH:i:s");


    DB::update("UPDATE bdp_evento SET eve_deleted_at = ? WHERE eve_id = ?", array($eve_deleted_at, $id));

    return redirect(url("/eventos/eventos/listar"));
  }

  function getEliminar($id) {
    DB::delete("DELETE FROM bdp_imagen WHERE eve_id = ?", array($id));
    DB::delete("DELETE FROM bdp_evento WHERE eve_id = ?", array($id));

    return redirect(url("eventos/eventos/listar"));
  }

}
