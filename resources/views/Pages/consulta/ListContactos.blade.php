@extends('Pages.inicio.index')

@section('contenido')
<div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
    <div class="container-fluid mt-5">    
        <div class="row justify-center align-items-center ">
            <div class="col-12">
                <div class="row op rounded p-4">
                <div class="col">
                    <div class="row">
                        <div class="col-12 text-center pb-5">
                            <h1 class=""><b>CONTACTOS.</b> </h1>
                        </div>
                    </div>
                    <form action="" method="post">
                        @csrf
                        <div class="row mb-3">
                            <div class="col">
                                <div class="table-responsive">
                                    <table class="table table-bordered border-dark" id="dt">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Nombre Dirección</th>
                                                <th>Dirección fisica</th>
                                                <th>Departamento</th>
                                                <th>Ciudad</th>
                                                <th>Barrio/Vereda/Corregimiento</th>
                                                <th>Municipio</th>
                                                <th>Codigo_Postal</th>
                                                <th>Tipo_Direccion</th>
                                                <th>Identificacion Persona</th>
                                                <th>Codigo persona</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($direccion as $key => $val)
                                            <tr>
                                                <td>{{$direccion[$key]['id__']}}</td>
                                                <td>{{$direccion[$key]['Nombre_Direccion']}}</td>
                                                <td>{{$direccion[$key]['Direccion_fisica']}}</td>
                                                <td>{{$direccion[$key]['Departamento']}}</td>
                                                <td>{{$direccion[$key]['Ciudad']}}</td>
                                                <td>{{$direccion[$key]['Barrio_Vereda_Corregimiento']}}</td>
                                                <td>{{$direccion[$key]['Municipio']}}</td>
                                                <td>{{$direccion[$key]['Codigo_Postal']}}-{{$direccion[$key]['Nombre_Codigo_Postal']}}</td>
                                                <td>{{$direccion[$key]['Tipo_Direccion']}}</td>
                                                <td>{{$direccion[$key]['Identificacion']}}</td>
                                                <td>{{$direccion[$key]['Codigo_Cliente']}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                                                
                        <div class="row d-flex justify-content-end mb-5">
                            <!-- <div class="col-12 col-md-4 pb-3 pb-md-0 d-grid gap-2">
                                <button type="submit" class="btn btn-dark text-white">Editar</button>
                            </div>
                            <div class="col-12 col-md-4 pb-3 pb-md-0 d-grid gap-2">
                                <a href="{{ route('info.index')}}" class="btn btn-outline-dark">Volver</a>
                            </div> -->
                            
                            <div class="col-12 col-md-4 pb-3 pb-md-0 d-grid gap-2">
                                <a href="/" class="btn btn-outline-dark">Reingresar</a>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection

@section('css')
<style>
    .dataTables_wrapper{
        color: #212529!important;
        font-weight: bold!important;
    }
    div.dataTables_wrapper div.dataTables_length label, div.dataTables_filter label {
        font-weight: bold!important;
    }
    div.dataTables_wrapper div.dataTables_length label select, div.dataTables_filter label input{
        color: white!important;
        background: #212529!important;
    }
    .paginate_button a{
        color: white !important;
        background-color: #212529!important;
    }
</style>
@endsection