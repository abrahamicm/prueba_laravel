<!-- Id Field -->
<div class="col-sm-4">
{!! Form::label('model_name', 'Nombre del modelo:') !!}
    <p>{{ $vehicle->model_name }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-4">
{!! Form::label('client_id', 'Cliente:') !!}
    <p>{{ $vehicle->client->name }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-4">
{!! Form::label('brand_id', 'Marca:') !!}
    <p>{{ ucfirst($vehicle->brand->name) }}</p>
</div>

<!-- Cedula Field -->
<div class="col-sm-4">
{!! Form::label('type_vehicle_id', 'Tipo') !!}
    <p>{{ $vehicle->type_vehicle->name }}</p>
</div>

<!-- Celular Field -->
<div class="col-sm-4">
{!! Form::label('license_plate', 'license_plate') !!}
    <p>{{ $vehicle->license_plate }}</p>
</div>

