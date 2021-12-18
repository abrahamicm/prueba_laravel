<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use Laracasts\Flash\Flash;


class VehicleController extends Controller
{

    public function index()
    {

        $vehicles = Vehicle::paginate(5);
        return view('vehicles.index')
            ->with('vehicles', $vehicles);
    }

    public function create()
    {
        return view('vehicles.create');
    }


    public function store(StoreVehicleRequest $request)
    {
       
        $vehicle = new Vehicle();
        $vehicle->create($request->all());
        Flash::success('Vehiculo guardado');
        return redirect(route('vehicles.index'));
    }

    public function show($id)
    {
        $vehicle = Vehicle::find($id);


        if (empty($vehicle)) {
            Flash::error('Vehiculo no encontrado');
            return redirect(route('vehicles.index'));
        }

        return view('vehicles.show')->with('vehicle', $vehicle);
    }


    public function edit($id)
    {
        $vehicle = Vehicle::find($id);


        if (empty($vehicle)) {
            Flash::error('Vehiculo no encontrado');
            return redirect(route('vehicles.index'));
        }

        return view('vehicles.edit')->with('vehicle', $vehicle);
    }


    public function update(UpdateVehicleRequest $request, Vehicle $vehicle)
    {
        $vehicle->update($request->all());
        Flash::success('Vehiculo actualizado');
        return redirect(route('vehicles.index'));
    }

 
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        Flash::success('Vehiculo eliminado');
        return redirect(route('vehicles.index'));
    }

}
