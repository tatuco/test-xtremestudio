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
        if (!Utils::charactersSpecials($request->where)
            || !Utils::charactersSpecials($request->select)
            || !Utils::charactersSpecials($request->columns)
            || !Utils::charactersSpecials($request->limit)
            || !Utils::charactersSpecials($request->count)
            || !Utils::charactersSpecials($request->group)
            || !Utils::charactersSpecials($request->join)
            || !Utils::charactersSpecials($request->sort)) {
            return response()->json([
               "message" => "Caracteres Especiales en el request"
            ], 422);
        }
        return $next($request);
    }
}
