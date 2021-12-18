<!-- Nombre Field -->



@include('assign_vehicles.errors')


<div class="row mt-4">
    <h3 class="text-center">Nuevo cliente</h3>
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Nombre:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}

    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('identification_card', 'Cedula:') !!}
        {!! Form::text('identification_card', null, ['class' => 'form-control']) !!}

    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Correo Electronico:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}

    </div>

</div>

<div class="row mt-4">
    <h3 class="text-center">Nuevo vehiculo</h3>
    <div class="form-group col-sm-6">
        {!! Form::label('model_name', 'Nombre del modelo:') !!}
        {!! Form::text('model_name', null, ['class' => 'form-control']) !!}

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


</div>