<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class iconcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $type)
    {
        if (Auth::user()->userable_type == "App\Models\Member") {
            if ($type == 'profil_terverifikasi') {
                if (Auth::user()->userable->icon->profile_verif_status == 'Terverifikasi') {
                    return $next($request);
                }
            } elseif ($type == 'pembayaran_terverifikasi') {
                if (Auth::user()->userable->icon->payment_verif_status == 'Terverifikasi') {
                    return $next($request);
                }
            } elseif ($type == 'webinar_peserta') {
                if (Auth::user()->userable->webinar) {
                    return $next($request);
                }else{
                    return redirect(route('register-webinar'));
                }
            }
        }
        return abort(403);
    }
}
