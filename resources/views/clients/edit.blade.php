@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Editar Cliente</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

       

        <div class="card">

            {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('clients.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('clients.index') }}" class="btn btn-default">Cancelar</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection