<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Laracasts\Flash\Flash;

class ClientController extends Controller
{

    public function index()
    {
        $clients = Client::paginate(5);
        return view('clients.index')
            ->with('clients', $clients);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(StoreClientRequest $request)
    {
        $client = new Client();
        $client->create($request->all());
        Flash::success('Cliente guardado');
        return redirect(route('clients.index'));
    }


    public function show($id)
    {
        $client = Client::find($id);
        if (empty($client)) {
            Flash::error('Cliente no encontrado');
            return redirect(route('clients.index'));
        }
        return view('clients.show')->with('client', $client);
    }

    public function edit($id)
    {
        $client = Client::find($id);
        if (empty($client)) {
            Flash::error('Vehiculo no encontrado');
            return redirect(route('clients.index'));
        }
        return view('clients.edit')->with('client', $client);
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());
        Flash::success('Cliente actualizado');
        return redirect(route('clients.index'));
    }

    public function destroy(Client $client)
    {
        $client->delete();
        Flash::success('Cliente eliminado');
        return redirect(route('clients.index'));
    }
}
