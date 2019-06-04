<?php

namespace App\Providers;

use App\FormFields\MultipleVideosFormField;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      Voyager::addFormField(MultipleVideosFormField::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      //
    }
}
