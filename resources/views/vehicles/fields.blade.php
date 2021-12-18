<!-- Nombre Field -->



@include('vehicles.errors')

<div class="form-group col-sm-6">
    {!! Form::label('model_name', 'Nombre del modelo:') !!}
    {!! Form::text('model_name', null, ['class' => 'form-control']) !!}

</div>
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Cliente:') !!}
    {!! Form::select('client_id', $clientItems, null, ['class' => 'form-control custom-select']) !!}
   
</div>
<div class="form-group col-sm-6">
    {!! Form::label('brand_id', 'Marca:') !!}
    {!! Form::select('brand_id', $brandtItems, null, ['class' => 'form-control custom-select']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('type_vehicle_id', 'Tipo') !!}
    {!! Form::select('type_vehicle_id', $typeVehicleItems, null, ['class' => 'form-control custom-select']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('license_plate', 'license_plate') !!}
    {!! Form::text('license_plate', null, ['class' => 'form-control']) !!}
  
</div>

