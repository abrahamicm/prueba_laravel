@extends('layouts.app')

@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">{{ __('Vehiculos') }}</div>

        <div class="card-body" id="app-q">
            <div class="contenedor">
                <form class="form-inline text-center" @submit.prevent="getVehicles"> 
                    <input type="text" placeholder="Cedula" v-model="i" @keyup="getVehicles">
                    <input type="text" placeholder="Placa" v-model="l"  @keyup="getVehicles">
                    <input type="text" placeholder="Propietario" v-model="o"  @keyup="getVehicles">
                    <button>Enviar</button>

                </form>
                <table class="table" id="vehicles-table">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Cedula</th>
                            <th>PLaca</th>
                            <th>Propietario</th>
                            
                            <th>Tipo</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr v-for="v of vs">
                            <td>@{{v.model_name}}</td>
                            <td>@{{v.client.identification_card}}</td>
                            <td>@{{v.license_plate}}</td>
                            <td>@{{v.client.name}}</td>
                           
                            <td>@{{v.type_vehicle.name}}</td>

                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>


<script>
    var vm = new Vue({
        el: "#app-q",
        data: {
            i: '',
            l: '',
            o: '',
            vs: []
        },
        mounted: function() {
            this.getVehicles()
        },
        methods: {
            getVehicles: function() {
                const params = new URLSearchParams({
                    i: this.i,
                    l: this.l,
                    o: this.o,
                });
                fetch('/seach?'+params, {
                        method: 'GET',
                    })
                    .then((res) => res.json())
                    .then((response) => {

                        this.vs = response
                     
                    })
            }
        }
    })
</script>

@endsection