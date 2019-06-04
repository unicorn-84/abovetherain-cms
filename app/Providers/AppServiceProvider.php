<?php

namespace App\Providers;

use App\FormFields\MultipleVideosFormField;
use App\FormFields\VideoFormField;
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
      Voyager::addFormField(VideoFormField::class);
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
