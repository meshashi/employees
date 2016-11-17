<?php
namespace App\Repository;
 
use Illuminate\Support\ServiceProvider;
 
class BackendServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->app->bind('App\Repository\EmployeeInterface', 'App\Repository\Employee');
	}
}