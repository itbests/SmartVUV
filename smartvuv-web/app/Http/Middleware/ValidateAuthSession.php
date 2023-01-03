<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Utilities\Sessiontools;
use Illuminate\Support\Facades\Auth;

class ValidateAuthSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Valida que exista una key en Redis user_session para la sesión actual
        if ( Sessiontools::valCurrentSession() == 0 )
        {
            return redirect( 'app/LoginOtherBrowser' );
        }

        if ( Sessiontools::countSessionActive() > 1 )
        {
            Sessiontools::logoutByLoginOtherBrowser();
        }

        return $next($request);
    }
}
