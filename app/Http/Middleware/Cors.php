<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     * Permite el acceso a los recursos solo si estan registrador en la variable $domains
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $domains = ['http://localhost', 'http://localhost:8080'];
        
        if(isset($request->server()['HTTP_ORIGIN'])){
            $origin = $request->server()['HTTP_ORIGIN'];
            if(in_array($origin, $domains)){
                header('Access-Control-Allow-Origin: ' . $origin);
                header('Cache-Control: No-Cache');
                header('Access-Control-Allow-Methods: POST,GET,OPTIONS,PUT,DELETE');
                header('Access-Control-Allow-Headers: Origin, Content-Type, Authorization');
            }
        }

        return $next($request);
    }
}
