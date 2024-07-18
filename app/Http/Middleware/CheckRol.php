<?php

namespace App\Http\Middleware;

use App\Models\Rol;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Colors\Rgb\Channels\Red;
use Symfony\Component\HttpFoundation\Response;

class CheckRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /**if(Auth::user()->email != 'admin@mail.com') {
            return redirect()->route('home');
        }
            return $next($request);**/

        if(auth()->check()) {
            if(auth()->user()->email == 'admin@mail.com') {
                return $next($request);
            }
        }
        return redirect()->to('/');
    }
}
