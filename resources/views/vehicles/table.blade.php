<div class="table-responsive">
    <table class="table" id="vehicles-table">
        <thead>
            <tr>
                <th>Modelo</th>
        <th>Tipo</th>
        <th>PLaca</th>
        <th>Propietario</th>


                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->model_name }}</td>
            <td>{{ $vehicle->type_vehicle->name }}</td>
            <td>{{ $vehicle->license_plate }}</td>
            <td>{{ $vehicle->client->name }}</td>

            <td>{{ $vehicle->fecha_ingreso }}</td>

                <td width="120">
                    {!! Form::open(['route' => ['vehicles.destroy', $vehicle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('vehicles.show', [$vehicle->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('vehicles.edit', [$vehicle->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $vehicles->links() }}</div>
</div>
