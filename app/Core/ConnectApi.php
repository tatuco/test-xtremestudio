<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 31/08/18
 * Time: 02:55 PM
 */

namespace App\Core;


class ConnectApi
{

    public static function get($enpoint)
    {
        $host = env("API_LOAGING_HOST");
        $port = env("API_LOADING_PORT");

        $resp = self::curl($host, $port, '/api/'.$enpoint);
        //$resp = $contents = preg_replace('/HTTP(.*)alive/s',"",$resp);
        //$resp = $foo = preg_replace('/HTTP(.*)html/s',"",$resp);
        /*$header_size = curl_getinfo($resp, CURLINFO_HEADER_SIZE);
        $header = substr($resp, 0, $header_size);
        $body = substr($resp, $header_size);*/
        return $resp;
    }


    public static function curl($host, $port, $endpoint)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'
        ];

        $client = curl_init();
        curl_setopt($client, CURLOPT_URL, $host.':'.$port.'/'.$endpoint);
        curl_setopt($client, CURLOPT_HEADER, $headers);
        curl_setopt($client, CURLOPT_HEADER, false);
        $content = curl_exec($client);

        $header_size = curl_getinfo($client, CURLINFO_HEADER_SIZE);
        $headers = substr($content, 0, $header_size);
        $body = substr($content, $header_size);
        curl_close($client);

        $resp = file_get_contents($host.':'.$port.'/'.$endpoint, FALSE);
        return $resp;
    }


}