<?php

namespace MailList\GmailList;

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
        $this->app->make('MailList\GmailList\GmailController');
        $this->app->make('MailList\GmailList\mailSearchController');
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
