<!-- Id Field -->
<div class="col-sm-4">
{!! Form::label('model_name', 'Nombre del modelo:') !!}
    <p>{{ $client->model_name }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-4">
{!! Form::label('client_id', 'Cliente:') !!}
    <p>{{ $client->client->name }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-4">
{!! Form::label('brand_id', 'Marca:') !!}
    <p>{{ ucfirst($client->brand->name) }}</p>
</div>

<!-- Cedula Field -->
<div class="col-sm-4">
{!! Form::label('type_vehicle_id', 'Tipo') !!}
    <p>{{ $client->type_vehicle->name }}</p>
</div>

<!-- Celular Field -->
<div class="col-sm-4">
{!! Form::label('license_plate', 'license_plate') !!}
    <p>{{ $client->license_plate }}</p>
</div>

