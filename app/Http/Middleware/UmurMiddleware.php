<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // mengambil key yang disimpan di session controller
        $umur = $request->session()->get('umur');

        if($umur >= 18)
        {
            return $next($request);
        }
        
        // handle jika tidak memenuhi
        return redirect()->route('umur.form')->with('error', 'Anda belum memenuhi syarat');


        
    }
}
