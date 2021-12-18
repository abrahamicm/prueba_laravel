<!-- Nombre Field -->



@include('brands.errors')

<div class="form-group col-sm-6">
    {!! Form::label('model', 'Nombre del modelo:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}

</div>

