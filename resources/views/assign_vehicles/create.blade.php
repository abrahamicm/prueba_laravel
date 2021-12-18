@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Asignar Vehiculo</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

    @include('flash::message')

        <div class="card">

            {!! Form::open(['route' => 'assign_vehicles.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('assign_vehicles.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('assign_vehicles.index') }}" class="btn btn-default">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
