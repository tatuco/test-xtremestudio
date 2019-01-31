<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 05/09/18
 * Time: 08:34 AM
 */

namespace App\Core;


class Hstore
{
    public static function encode_hstore($array) {
        if (!$array)
            return NULL;

        if (!is_array($array))
            return $array;

        $expr = array();

        foreach ($array as $key => $val) {
            $search = array('\\', "'", '"');
            $replace = array('\\\\', "''", '\"');

            $key = str_replace($search, $replace, $key);
            $val = $val === NULL
                ? 'NULL'
                : ''.str_replace($search, $replace, $val).'';

            $expr[] = sprintf('"%s"=>%s', $key, $val);
        }

        return sprintf("%s", implode(',', $expr));
    }

    public static function decode_hstore($hstore) {
        if (!$hstore || !preg_match_all('/"(.+)(?<!\\\)"=>(""|NULL|".+(?<!\\\)"),?/U', $hstore, $match, PREG_SET_ORDER))
            return array();

        $array = array();

        foreach ($match as $set) {
            list(, $k, $v) = $set;

            $v = $v === 'NULL'
                ? NULL
                : substr($v, 1, -1);

            $search = array('\"', '\\\\');
            $replace = array('"', '\\');

            $k = str_replace($search, $replace, $k);
            if ($v !== NULL)
                $v = str_replace($search, $replace, $v);

            $array[$k] = $v;
        }

        return $array;
    }

    public static function convert_matriz_array($matriz)
    {
        $result = [];

        if (!is_array($matriz))
            return null;

        foreach ($matriz as $it)
        {
            foreach ($it as $key => $val)
            {
                if($val == null || $val == false)
                    $val = 0;
                array_push($result, $val);
            }
        }

        return $result;
    }

    public static function convert_array_matriz($array)
    {
        $result = [];

        foreach ($array as $key => $value)
        {
            $obj = [ $key < 1 ? 'O': $key => $value == '1'? true : null];
            if($value =='1')
                $value = true;
            else
                $value = false;
            array_push($result, $value);
        }
        return $result;
    }

    public static function _convert_array_matriz($array)
    {
        $result = [];

        foreach ($array as $key => $value)
        {
            $obj = [ $key < 1 ? 'O': $key => $value == '1'? true : null];

           $result = self::arrays_push($result, $obj);
        }
        return $result;
    }

    public static function arrays_push($array = [], $value)
    {
        $array[count($array)] = $value;
        return $array;
    }

    public static function encode_text_array($array)
    {
        if(count($array) > 0 )
        {

            $string = "{";
            $cont = 0;
            foreach($array as $e)
            {
                $string .= "{".$e[0].','.$e[1]."}";
                $cont++;
                if($cont != count($array))
                    $string .= ',';


            }

            $string .= "}";

            return $string;
        }
        return "{}";


    }

    public static function decode_text_array($text)
    {

        $array = [];
        $str = str_replace("{{", "", $text);
        $str = str_replace("},{", ";",$str);
        $str = str_replace("}}", "", $str);
        $array = explode(";", $str);
        $newArray = [];
        foreach ($array as $a)
        {
            $a = str_replace("\"","", $a);
            array_push($newArray, explode(",", $a));
        }

        return $newArray;

    }
}