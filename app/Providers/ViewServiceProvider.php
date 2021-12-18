<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Client;
use App\Models\TypeVehicle;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
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
        View::composer(['vehicles.fields','assign_vehicles.fields'], function ($view) {
            $clientItems = Client::pluck('name','id')->toArray();
            $brandtItems = Brand::pluck('name','id')->toArray();
            $typeVehicleItems = TypeVehicle::pluck('name','id')->toArray();

            $view
            ->with('clientItems', $clientItems)
            ->with('brandtItems', $brandtItems)
            ->with('typeVehicleItems', $typeVehicleItems);
        });

    }
}