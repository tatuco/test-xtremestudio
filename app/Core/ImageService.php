<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 8/1/18
 * Time: 10:01 AM
 */

namespace App\Core;


use App\Http\Services\ParamService;
use Carbon\Carbon;
use SplFileInfo;

class ImageService //extends TatucoService
{

    /*
     * Metodo de Guardado de una Sola Imagen
     */
    public static function image($images, $id, $extension)
    {
        $route = storage_path().'\\app\\noticias\\';
      //  $route_web = (new ParamService)->findValueForKey('UPLOAD_IMAGES')?:'/opt/tracking/images/';
        $now = Carbon::now()->format('Y-m-d');
       // define('UPLOAD_DIR', $route);
        $img = $images;
        //$ext = pathinfo($img, PATHINFO_EXTENSION);
        //$img = str_replace('data:image/'.$ext.';base64,', '', $img);
        $data = base64_decode($img);

        $var_for = uniqid().'-'.$id.'-'.$now. '.'.$extension;
        $file = $route. $var_for;
        $image = $route . $var_for;
        $success = file_put_contents($file, $data);
        if ($success) {
           // $obj = new \stdClass();
           // $obj->image = $image;
           // $obj->name = $var_for;
            return ["image" => $image, "name" => $var_for];
        }else {
            return null;
        }
    }

    public static function get_extension($string)
    {
        $info = new SplFileInfo($string);
       // var_dump($info->getExtension());
        return $info->getExtension();
        $extension="";
        if(!empty($string)){
            $formats = ["jpg", "jpeg", "png", "gif"];
            if(substr($string,0,4)=='http')
            {
                return $extension=3;
            }else {
                $data = $string;
                $pos = strpos($data, ';');
                $type = explode(':', substr($data, 0, $pos))[1];
                $extension = preg_split("[/]", $type);
                return $extension[1];
            }
        }else{
            return "Extension de la Imagen Vacia o en Blanco, Verifique";
        }
    }
}
