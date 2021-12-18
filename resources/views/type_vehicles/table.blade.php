<div class="table-responsive">
    <table class="table" id="vehicles-table">
        <thead>
            <tr>
                <th>Tipo de vehiculo</th>



                <th colspan="3">Acción</th>
            </tr>
        </thead>
        <tbody>
        @foreach($type_vehicles as $vehicle)
            <tr>
                <td>{{ $vehicle->name }}</td>


                <td width="120">
                    {!! Form::open(['route' => ['type_vehicles.destroy', $vehicle->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('type_vehicles.show', [$vehicle->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('type_vehicles.edit', [$vehicle->id]) }}" class='btn btn-default btn-xs'>
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
    <div class="d-flex justify-content-center">{{ $type_vehicles->links() }}</div>
</div>
