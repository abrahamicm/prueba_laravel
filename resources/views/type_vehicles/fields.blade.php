<!-- Nombre Field -->



@include('type_vehicles.errors')

<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre del modelo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>
