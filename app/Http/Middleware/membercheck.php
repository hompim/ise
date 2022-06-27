<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class membercheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        switch (Auth::user()->userable_type) {
            case 'App\Models\Admin':
                if (Auth::user()->userable->admin_type == "Icon Admin") {
                    return redirect(route('academy.admin.home.index'));
                } else {
                    return redirect(route('bionix.admin.beranda.index'));
                }
                break;
            case 'App\Models\Member':
                return redirect(route('peserta.dashboard.choose'));
            default:
                abort(404);
                break;
        }
    }
}
