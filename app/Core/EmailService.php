<?php


namespace App\Core;


use Exception;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public static function send($data, $from, $to, $view, $title = 'Plazfer', $subject = 'Mensaje Informativo. Plazfer')
    {
        try {
            Mail::send($view, $data, function ($message) use ($from, $title, $to, $subject) {
                $message->from($from, $title);
                $message->to($to)->subject($subject);
            });
            return response()->json([
                'Correo enviado' => 'from: '.$from
            ], 200);

        } catch (Exception $e) {
            return response()->json([
                'Error' => $e->getMessage(),
                'linea' => $e->getLine(),
                'file' => $e->getFile()
            ], 500);
        }

    }
}
