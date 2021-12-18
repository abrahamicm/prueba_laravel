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
        @foreach($assign_vehicles as $assign_vehicle)
            <tr>
                <td>{{ $assign_vehicle->model_name }}</td>
            <td>{{ $assign_vehicle->type_vehicle->name }}</td>
            <td>{{ $assign_vehicle->license_plate }}</td>
            <td>{{ $assign_vehicle->client->name }}</td>

            <td>{{ $assign_vehicle->fecha_ingreso }}</td>

                <td width="120">
                    {!! Form::open(['route' => ['assign_vehiclesdestroy', $assign_vehicle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('assign_vehiclesshow', [$assign_vehicle->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('assign_vehiclesedit', [$assign_vehicle->id]) }}" class='btn btn-default btn-xs'>
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
    <div class="d-flex justify-content-center">{{ $assign_vehicles->links() }}</div>
</div>
