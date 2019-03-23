<?php

namespace Mail\Gmail;

use Illuminate\Support\ServiceProvider;

class GmailListProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Mail\Gmail\GmailController');
        $this->app->make('Mail\Gmail\mailSearchController');
        //$this->app->make('Mail\Gmail\');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
