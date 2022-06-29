<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class bionixcheck
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
                if (Auth::user()->userable->bionix->profile_verif_status == 'Terverifikasi') {
                    return $next($request);
                }
            } elseif ($type == 'pembayaran_terverifikasi') {
                if (Auth::user()->userable->bionix->payment_verif_status == 'Terverifikasi') {
                    return $next($request);
                }
            } elseif ($type == 'unregistered') {
                if (!Auth::user()->userable->bionix_id) {
                    return $next($request);
                }else{
                    return redirect(route('bionix.peserta.homepage'));
                }
            }
        }
        return abort(403);
    }
}
