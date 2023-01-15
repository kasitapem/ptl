<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
#--- Panggil Model dan Facades /Gate
use App\Models\User;
use Illuminate\Support\Facades\Gate;
#--- end panggil model dan facades/gate
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();
        #- Menggunakan Gate untuk hak akses
        Gate::define('admin',function(User $user){
            return $user->level;
        });
    }
}
