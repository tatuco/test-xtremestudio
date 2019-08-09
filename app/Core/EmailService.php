<?php


namespace App\Core;


use Exception;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public static function send($data, $from, $to, $view, $title = 'Plazfer', $subject = 'Mensaje Informativo. Plazfer')
    {
        try {
            Mail::send($view, $data, function ($message) use ($from, $title, $to, $subject, $data) {
                $message->from($from, $title);
                $message->to($to)->subject($subject);
            });
            return response()->json([
                'status' => 200,
                'Correo enviado' => 'from: '.$from
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'Error' => $e->getMessage(),
                'linea' => $e->getLine(),
                'file' => $e->getFile()
            ], 500);
        }
    }
}
