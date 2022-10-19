<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SoloAdmin
{
    
    public function handle(Request $request, Closure $next)
    {
        switch(Auth::user()->tipo){
            case('1'):
                return $next($request);
            break;
            case('2'):
                return redirect('users');
            break;
        }
    }
}
