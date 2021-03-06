<?php

namespace Goodechilde\GcTags;

use App;
use Str;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;
//use Goodechilde\GcTags\SeedServiceProvider;

class GcTagsServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'gc-tags');

        // Register the main class to use with the facade
        $this->app->singleton('gc-tags', function () {
            return new GcTags();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->app->register(SeedServiceProvider::class);
        $this->registerEloquentFactoriesFrom(__DIR__ . '/database/factories');
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'gc-tags');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'gc-tags');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('gc-tags.php'),
            ], 'gc-tags');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/gc-tags'),
            ], 'views');*/

            // Publishing the factories.
            $this->publishes([
                __DIR__ . '/database/factories' => database_path('factories'),
            ], 'gc-tags');
            // Publishing the seeds.
            $this->publishes([
                __DIR__ . '/database/seeds' => database_path('seeds'),
            ], 'gc-tags');


            $this->publishes([
                __DIR__ . '/OpenAPI/components' => app_path('/OpenAPI/components'),
                __DIR__ . '/OpenAPI/parameters' => app_path('/OpenAPI/parameters'),
                __DIR__ . '/OpenAPI/schemas' => app_path('/OpenAPI/schemas'),
                __DIR__ . '/OpenAPI/Tag.yaml' => app_path('/OpenAPI/Tag.yaml'),
                __DIR__ . '/OpenAPI/TagType.yaml' => app_path('/OpenAPI/TagType.yaml'),
            ], 'gc-openapis');

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/gc-tags'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/gc-tags'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
        }
    }

    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }
}
