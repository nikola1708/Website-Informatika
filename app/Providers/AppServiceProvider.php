<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
public function boot()
{
    Gate::define('access-admin', function ($user) {
        return $user->is_admin; // Checks if user is admin
    });
}

  public function adminDashboard()
{
    if (Gate::allows('access-admin')) {
        return view('admin.dashboard');
    }
    abort(403, 'Unauthorized!');
}
    public function register()
    {
        //
    }


}
