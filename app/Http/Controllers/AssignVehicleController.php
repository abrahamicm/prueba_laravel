<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreAssignVehicleRequest;
use App\Http\Requests\StoreClientRequest;
use App\Models\Client;
use App\Models\Vehicle;
use Laracasts\Flash\Flash;

class AssignVehicleController extends Controller
{

    public function create()
    {
        return view('assign_vehicles.create');
    }
    public function store( StoreAssignVehicleRequest $requestVehicle, StoreClientRequest $requestClient)
    {
        $client = new Client();
        $client->fill($requestClient->all());
        $client->save();
        $vehicle = new Vehicle();
        $vechicleArray=$requestVehicle->all();
        $vechicleArray['client_id'] =  $client->id;
        $vehicle->create($vechicleArray);
        Flash::success('Vehiculo Asignado');
        return view('assign_vehicles.create');
       
    }

   
}
