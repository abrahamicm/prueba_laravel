<?php

namespace App\Http\Controllers;

use App\Models\TypeVehicle;
use App\Http\Requests\StoreTypeVehicleRequest;
use App\Http\Requests\UpdateTypeVehicleRequest;
use Laracasts\Flash\Flash;

class TypeVehicleController extends Controller
{

    public function index()
    {
        $type_vehicles = TypeVehicle::paginate(5);
        return view('type_vehicles.index')
            ->with('type_vehicles', $type_vehicles);
    }


    public function create()
    {
        return view('type_vehicles.create');
    }

    public function store(StoreTypeVehicleRequest $request)
    {   
        $type_vehicle = new TypeVehicle();
        $type_vehicle->create($request->all());
        Flash::success('Tipo de vehiculo guardado');
        return redirect(route('type_vehicles.index'));
    }


    public function show($id)
    {
        $type_vehicle = TypeVehicle::find($id);
        if (empty($type_vehicle)) {
            Flash::error('Tipo de vehiculo no encontrado');
            return redirect(route('type_vehicles.index'));
        }
        return view('type_vehicles.show')->with('type_vehicle', $type_vehicle);
    }


    public function edit($id)
    {
        $type_vehicle = TypeVehicle::find($id);
        if (empty($type_vehicle)) {
            Flash::error('tipo de vehiculo no encontrado');
            return redirect(route('type_vehicles.index'));
        }

        return view('type_vehicles.edit')->with('vehicle', $type_vehicle);
    }

    public function update(UpdateTypeVehicleRequest $request, TypeVehicle $typeVehicle)
    {
        $typeVehicle->update($request->all());
        Flash::success('tipo de vehiculo actualizado');
        return redirect(route('type_vehicles.index'));
    }


    public function destroy(TypeVehicle $typeVehicle)
    {
        $typeVehicle->delete();
        Flash::success('Tipo de vehiculo eliminado');
        return redirect(route('type_vehicles.index'));
    }
}
