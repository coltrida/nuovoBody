<?php

namespace App\Providers;

use App\Models\Hour;
use App\Models\Trainer;
use App\Services\HourService;
use App\Services\TrainerService;
use Illuminate\Support\ServiceProvider;
use function view;

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
     * @param TrainerService $trainerService
     * @param HourService $hourService
     * @return void
     */
    public function boot(TrainerService $trainerService, HourService $hourService)
    {
        view()->composer('*', function ($view) use ($trainerService, $hourService)
        {
            $trainers = $trainerService->index();
            $orario = $hourService->index();
            $view->with('trainers', $trainers)->with('orario', $orario);
        });
    }
}
