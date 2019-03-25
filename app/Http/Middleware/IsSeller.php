<?php

namespace App\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;



use Closure;

class IsSeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    protected $auth; 
     public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if (($this->auth->user()->rol != 'seller_person') && ($this->auth->user()->rol != 'seller_company')) {
            $this->auth->logout();
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->to('auth/login');
            }
        }

        return $next($request);
    }
}
