<?php

namespace App\Providers;

use App\FormFields\TrainingFonColorFormField;
use App\FormFields\TrainingTextColorFormField;
use App\FormFields\MultipleVideosFormField;
use App\FormFields\TinymceBaseFormField;
use App\FormFields\TinymceFullFormField;
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
      Voyager::addFormField(TinymceBaseFormField::class);
      Voyager::addFormField(TinymceFullFormField::class);
      Voyager::addFormField(TrainingTextColorFormField::class);
      Voyager::addFormField(TrainingFonColorFormField::class);
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
