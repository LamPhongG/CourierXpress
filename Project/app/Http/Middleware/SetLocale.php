<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

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
        // Always start session first
        if (!$request->session()->isStarted()) {
            $request->session()->start();
        }
        
        // Get locale from session, URL parameter, or default to Vietnamese
        $locale = $request->get('locale') ?? Session::get('locale', 'vi');
        
        // Ensure locale is valid
        $supportedLocales = ['vi', 'en', 'hi'];
        if (!in_array($locale, $supportedLocales)) {
            $locale = 'vi';
        }
        
        // Store in session
        Session::put('locale', $locale);
        
        // Set application locale
        App::setLocale($locale);
        
        // Log for debugging
        \Log::info('SetLocale middleware: Set locale to ' . $locale);
        
        return $next($request);
    }
}
