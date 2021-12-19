@extends('layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Prueba logica</h1>
            </div>

        </div>
    </div>
</section>

<div class="content px-3">



    <div class="clearfix"></div>

    <div class="card">
        <div class="card-body p-0" id="logic_test">


            <div class="card-footer clearfix float-right">
                <div class="row">
                    <div class="col-md-6">
                        Entrada de datos
                        <textarea class="form-control" v-model="inicial" rows="15"></textarea>
                    </div>
                    <div class="col-md-6">
                        salida de datos
                        <textarea class="form-control" v-model="output" rows="15"></textarea>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-primary md-4" @click.prevent="format_date">formatear</button>
                    </div>

                </div>
            </div>
            @{{final}}
        </div>

    </div>
</div>
<script>
    var app = new Vue({
        el: ' #logic_test',
        data: {
            final: {},
            day: '',
            time: '',
            inicial: `[
                [" 2018-12-01 ", " AM ", " ID123 ", 5000],
                [" 2018-12-01 ", " AM ", " ID545 ", 7000],
                [" 2018-12-01 ", " PM ", " ID545 ", 3000],
                [" 2018-12-02 ", " AM ", " ID545 ", 7000]
]`,
            message: 'Hello',
            output: ''
        },
        methods: {
            format_date: function() {
                JSON.parse(this.inicial).forEach(el => {
                    this.day = el[0];
                    this.time = el[1];
                    if (typeof this.final[this.day] === 'undefined') { // preguntas si ya existe
                        this.final[this.day] = {};
                    }
                    if (typeof this.final[this.day][this.time] === 'undefined') { // preguntas si AM y PM ya estan en el objeto
                        this.final[this.day][this.time] = 0;
                    }
                    this.final[this.day][this.time] += el[3]; // sumas el valor para obtener el resultado
                });
                console.log(this.final)
                this.output = JSON.stringify(this.final,undefined, 4)
                this.final={}
                
            },

        }


    })
</script>
@endsection