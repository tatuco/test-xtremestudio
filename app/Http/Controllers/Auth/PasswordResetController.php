<?php

namespace App\Http\Controllers\Auth;

use App\Core\EmailService;
use App\Http\Services\DateService;
use App\Models\User;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;
use App\PasswordReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\JWTAuth;

class PasswordResetController extends Controller
{
    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
        ]);
        $user = User::where('email', $request->email)->first();
        if (!$user)
            return response()->json([
                'message' => 'We cant find a user with that e-mail address.'
            ], 404);
        $passwordReset = PasswordReset::updateOrCreate(
            ['email' => $user->email],
            [
                'email' => $user->email,
                'token' => str_random(60)
             ]
        );
      /*  $passwordReset = User::where('email', $user->email)
            ->update([
                'email' => $user->email,
                'remember_token' => str_random(60)
            ]);*/
       // $pass = PasswordReset::where('email', $user->email)->first();
        if ($user && $passwordReset)
            $user->notify(
                new PasswordResetRequest($passwordReset->token)
            );
        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
        ]);
    }
    /**
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {
        $passwordReset = PasswordReset::where('token', $token)
            ->first();
        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        }
        return response()->json($passwordReset);
    }
     /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'token' => 'required|string'
        ]);
       $passwordReset = PasswordReset::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();
   /*  $passwordReset = P::where('remember_token', $request->token)
         ->where('email', $request->email)
         ->first();*/
        if (!$passwordReset)
            return response()->json([
                'message' => 'This password reset token is invalid.'
            ], 404);
        $user = User::where('email', $passwordReset->email)->first();
        if (!$user)
            return response()->json([
                'message' => 'We cant find a user with that e-mail address.'
            ], 404);
        $user->password = bcrypt($request->password);
        $user->save();
        $passwordReset->delete();
        $user->notify(new PasswordResetSuccess($passwordReset->token));
        return response()->json($user);
    }

    public function createTokenTemp(Request $request)
    {
       try { $longitud = 8;
           $pass = substr(MD5(rand(5, 100)), 0, $longitud);
           $_request = new Request([
               'email'   => $request->email,
               'password'  => $pass,
               'api' => true
           ]);
           $user = User::where("email", $request->email)->update(["password" => bcrypt($pass)]);
           if ($user) {
               $login = (new AuthController())->login($_request);
               $object = json_decode($login->content(), true);
               //  return $login;
               if ($object["status"] == 200) {
                   $resp = EmailService::send(["password" => $pass], env('MAIL_USERNAME'), $request->email, 'emails.password_reset', 'Plazfer', 'Contraseña Temporal');
                   $obj = json_decode($resp->content(), true);
                   if ($obj["status"] == 200) {
                       $user = User::where('email', $request->email)->first();
                       if ($user) {
                           $user->temporal = true;
                           $user->date_expiration_password = DateService::GetDateTime();
                           $user->save();
                       } else
                           return response()->json([
                               'message' => 'No se ha encontrado ningun usuario con ese dirreccion de correo.'
                           ], 422);
                   } else if ($obj["status"] == 200) {
                       return response()->json([
                           'message' => 'Error en envio de correo. Verifique su proveedor de servicio SMTP'
                       ], 422);
                   }

               } else
                   return $login;
           } else {
               return response()->json([
                   'message' => 'No se ha encontrado ningun usuario con ese dirreccion de correo.'
               ], 422);
           }

           /* $obj = $resp->content();
            array_push($arr_resp, $resp);
            $obj = json_decode($obj, true);
            if ($obj["status"] == 200) {}*/
           //  return $login;
           } catch (\Exception $e) {
            return response()->json([
                "message" => "Error en envio de correo, Verifique su proveedor de servicio SMTP."
            ], 422);
          }
    }

    public function resetPass(Request $request)
    {
        try {
           /* $request->validate([
                'password' => 'required|string|confirmed',
                'email' => 'required|string'
            ]);*/
          //  $user_current = JWTAuth::parseToken()->authenticate();
            $validator = Validator::make($request->all(),[
                'password' => 'required|string|confirmed',
                'email' => 'required|string'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    $validator->getMessageBag(),
                ], 422);
            }
            $user = User::where('email', $request->email)->first();

            if (!$user)
                return response()->json([
                    'message' => 'No se ha encontrado ningun Usuario.'
                ], 422);
            if (Carbon::parse($user->date_expiration_password)->addMinutes(720)->isPast()) {
                return response()->json([
                    'message' => 'La contraseña temporal ha Expirado. Solicite una nueva contraseña, tiene 12 horas para cambiar ingresar al Sistema y establecer una nueva.'
                ], 422);
            }
            $user->password = bcrypt($request->password);
            $user->temporal = false;
            $user->save();
            /*  $_request = new Request([
                  'email'   => $request->email,
                  'password'  => $request->password,
                  'api' => true
              ]);*/
            // $login = (new AuthController())->login($_request);
            //  $object = json_decode($login->content(), true);
            return $user;
        } catch (\Exception $e) {
            return response()->json([
                "message" => 'Error Al intentar Cambiar la contraseña'
             ], 500);
        }
    }

    public function changePassword(Request $request)
    {
        try {
            /* $request->validate([
                 'password' => 'required|string|confirmed',
                 'email' => 'required|string'
             ]);*/
              $user_current = \JWTAuth::parseToken()->authenticate();
            $validator = Validator::make($request->all(),[
                'password' => 'required|string|confirmed',
                'password_actual' => 'required|string'
            ]);
            if ($validator->fails()) {
                return response()->json([
                    $validator->getMessageBag(),
                ], 422);
            }
            $user = User::where('email', $user_current->email)->first();

            if (!$user) {
                return response()->json([
                    'message' => 'No se a encontrado ningun Usuario con esa direccion de correo.'
                ], 422);
            }
           /* if (Hash::make($request->password_actual) === $user->password) {
                return response()->json([
                    'message' => 'La Contraseña Actual es Incorrecta. Intente de nuevo'
                ], 422);
            }*/

            if(!Hash::check($request->password_actual, $user->password)) {
                return response()->json([
                    'message' => 'La Contraseña Actual es Incorrecta. Intente de nuevo'
                ], 422);
            }

            if (Carbon::parse($user->date_expiration_password)->addMinutes(720)->isPast()) {
                return response()->json([
                    'message' => 'Contraseña temporal a Expirado. Solicite una nueva contraseña, tiene 12 horas para cambiar ingresar al Sistema y establecer una nueva.'
                ], 422);
            }
            $user->password = bcrypt($request->password);
            $user->temporal = false;
            $user->save();
            /*  $_request = new Request([
                  'email'   => $request->email,
                  'password'  => $request->password,
                  'api' => true
              ]);*/
            // $login = (new AuthController())->login($_request);
            //  $object = json_decode($login->content(), true);
            return response()->json([
                'message' => 'Contraseña cambiada con exito.'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                "message" => 'Error Al intentar Cambiar la contraseña.',
            'mensaje' => $e->getMessage(),
            'file' => $e->getFile(),
            'linea' => $e->getLine(),
            ], 500);
        }
    }
}
