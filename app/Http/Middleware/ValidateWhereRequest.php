<?php

namespace App\Http\Middleware;

use App\Core\Utils;
use Closure;
use Hamcrest\Util;

class ValidateWhereRequest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Utils::charactersSpecials($request->where)) {
            return response()->json([
               "message" => "Caracteres Especiales en el request"
            ], 422);
        }
        return $next($request);
    }
}
