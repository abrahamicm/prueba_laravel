<!-- Nombre Field -->




@include('clients.errors')

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