<?php

namespace Dictionaries;

use Illuminate\Support\ServiceProvider;

class DictionaryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateDictionaryCommand::class
            ]);
        }

        $this->publishes([
            __DIR__.'/Dictionary.php' => app_path('Models/Dictionary.php')
        ]);
    }
}