<?php
/**
 * Created by PhpStorm.
 * User: zippyttech
 * Date: 14/09/18
 * Time: 09:19 AM
 */

namespace App\Core;


class SendNotification
{
        public static function send($data, $email)
        {
            $fields = [
                "subscribers"=> $email,
                "protocol"=> "email",
                "type"=> "evento",
                "subject"=> "Invitacion al TeeTime",
                "message"=> "Has sido Invitado por {$data['responsable']} en el {$data['target']} de {$data['date_from']} a {$data['date_to']}",
                "account"=> 1
            ];



            return self::post('api/sends', $fields);
        }

        public static function post($endpoint, $data)
        {
            $url = env('NOTIFICATION_IP').'/'.$endpoint;

            $client = new \GuzzleHttp\Client();

           $response = $client->post(
                $url,
               ['form_params' => $data,
                'body' => json_encode($data),
                   'headers' => [
                       'Content-Type' => 'application/json',
                       'Accept' => 'application/json'
                   ],
                   'json' => $data
                   ]
            );

            $body = $response->getBody();
            return $body;

        }

        public static function _post($endpoint, $fields)
        {
            $headers = [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ];
            $url = env('NOTIFICATION_IP').'/'.$endpoint;

            $fields_string = http_build_query($fields, '', '&');
            $ch = curl_init();

//set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HEADER, $headers);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_CONNECT_TO, $fields);


//execute post
            $result = curl_exec($ch);

//close connection
            curl_close($ch);
            return response()->json(["message"=> "mensaje enviado"]);
        }
}
/**
http://192.168.0.114:5000/api/sends
 * {
"subscribers":"jaimeaurinegro97@gmail.com",
"protocol":"email",
"type":"Directa",
"subject":"asunto del mensaje",
"message":"mensaje de prueba para movil hoy",
"image":"http://en-cdnmed.agilecontent.com//resources/jpg/4/8/1508354738984.jpg",
"account":1
}

 */