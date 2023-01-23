<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        app()->setLocale($request->segment(1));
        return $next($request);
    }
    // public function handle($request, Closure $next)
    // {
    //     $locale = $request->session()->get('locale');
    //     if (!$locale) {
    //         $locale = 'en';
    //         $request->session()->put('locale', $locale);
    //     }
    //     if ($request->path() === '/') {
    //         return redirect()->to($locale);
    //     }
    //     return $next($request);
    // }
}