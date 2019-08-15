<?php


namespace App\Core;


use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Utils
{
    static function parseWhere($where)
    {
        if (is_array($where)) {
            return $where;
        } else {
            if (is_string($where)) {
                if ((strpos($where, '[[') > -1) || (strpos($where, ']]') > -1)) {
                    $where = str_replace('[[', '[{', $where);
                    $where = str_replace(']]', '}]', $where);
                    $where = str_replace('],[', '},{', $where);
                }
                return json_decode($where);
            } else {
                return [];
            }


        }

    }

    static function calculatePorcentage($part, $total)
    {
        $resp = 0;
        if ($part > 0 && $total > 0)
            $resp = ($part / $total) * 100;

        return round($resp, 0);
    }

    static function convert_from_latin1_to_utf8_recursively($dat)
    {
        if (is_string($dat)) {
            return utf8_encode($dat);
        } elseif (is_array($dat)) {
            $ret = [];
            foreach ($dat as $i => $d) $ret[$i] = self::convert_from_latin1_to_utf8_recursively($d);

            return $ret;
        } elseif (is_object($dat)) {
            foreach ($dat as $i => $d) $dat->$i = self::convert_from_latin1_to_utf8_recursively($d);

            return $dat;
        } else {
            return $dat;
        }
    }

    static function charactersSpecials($string)
    {
        $permitidos = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-""_[]{}:,=';
        for ($i = 0; $i < strlen($string); $i++) {
            if (strpos($permitidos, substr($string, $i, 1)) === false) {
                echo substr($string, $i, 1);
                return false;
            }
        }
        return true;
    }

    static function getIcon()
    {
        return env('AWS_URL') . '/imagenes-plazfer-workpack/logoplazfer (1).png';
    }

    static function imageFile($file)
    {
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $s3 = env('AWS_URL');
        switch ($ext) {
            case 'png':
                return $s3 . '/imagenes-plazfer-workpack/img.png';
                break;
            case 'jpg':
                return $s3 . '/imagenes-plazfer-workpack/img.png';
                break;
            case 'jpeg':
                return $s3 . '/imagenes-plazfer-workpack/img.png';
                break;
            case 'doc':
                return $s3 . '/imagenes-plazfer-workpack/doc.png';
                break;
            case 'docx':
                return $s3 . '/imagenes-plazfer-workpack/doc.png';
                break;
            case 'pdf':
                return $s3 . '/imagenes-plazfer-workpack/pdf.png';
                break;
            case 'xls':
                return $s3 . '/imagenes-plazfer-workpack/xls.png';
                break;
            case 'xlsx':
                return $s3 . '/imagenes-plazfer-workpack/xls.png';
                break;
            case 'ppt':
                return $s3 . '/imagenes-plazfer-workpack/ppt.png';
                break;
            case 'pptm':
                return $s3 . '/imagenes-plazfer-workpack/ppt.png';
                break;
            case 'pptx':
                return $s3 . '/imagenes-plazfer-workpack/ppt.png';
                break;
            case 'txt':
                return $s3 . '/imagenes-plazfer-workpack/txt.png';
                break;
            case 'rar':
                return $s3 . '/imagenes-plazfer-workpack/rar.png';
                break;
            default:
                return $s3 . '/imagenes-plazfer-workpack/doc.png';
                break;
        }
    }

    static function currentUser()
    {
        return Auth::user();
    }

    static function groupArray($arr, $group, $date_ = false, $preserveGroupKey = false, $preserveSubArrays = false)
    {
        $temp = array();
        foreach ($arr as $key => $value) {
            if ($date_) {
                $date = new Carbon($value->$group);
                $groupValue = $date->format('Y-m-d');
            } else {
                $groupValue = $value->$group;
            }


            /* if(!$preserveGroupKey)
             {
                 unset($arr[$key]->$group);
             }*/
            if (!array_key_exists($groupValue, $temp)) {
                $temp[$groupValue] = array();
            }

            /*  if(!$preserveSubArrays){
                  $data = count($arr[$key]) == 1? array_pop($arr[$key]) : $arr[$key];
              } else {*/
            $data = $arr[$key];
            /* }*/
            $temp[$groupValue][] = $data;
        }
        return $temp;
    }

    static function searchArray($array, $key, $value, $position = true)
    {
        $c = 0;
        foreach ($array as $it) {

            if ($it->$key == $value) {
                //echo 'aqui'.$it->$key. ' = '.$value.' true \\n';
                if ($position)
                    return $c;
                else
                    return $it;
            }
            $c++;
        }
    }

    static function search_service($array = [], $key, $value)
    {
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i][$key] === $value) {
                //echo "si $value ==> {$array[$i][$key]}";
                return true;
            }
        }
    }


    static function itemInArray($array, $key, $value)
    {
        foreach ($array as $it) {
            if ($it->$key == $value) {
                // echo 'aqui'.$it->$key. ' = '.$value.' true \\n';

                return true;
            } else {
                // echo 'aqui'.$it->$key. ' = '.$value.' false \\n';

                return false;
            }
        }
    }

}
