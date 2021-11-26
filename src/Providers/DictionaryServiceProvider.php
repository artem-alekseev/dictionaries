<?php

namespace Dictionaries\Providers;

use Illuminate\Support\ServiceProvider;
use Dictionaries\Console\Commands\CreateDictionaryCommand;

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
    }
}