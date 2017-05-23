<?php namespace App\Http\Middleware;

use Closure;

class AutentifikasiAdmin
{
	private $auth;
	public function __construct()
	{
		  $this->auth = app('auth');
	}
 public function handle($request, Closure $next)
    {
    	if($this->auth->check() && $this->auth->user()->level=='admin'){
    		return $next($request);
       	}
      
       	return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');
    }
}
