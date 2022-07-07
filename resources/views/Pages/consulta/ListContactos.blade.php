@extends('Pages.inicio.index')
@section('tittle', 'Contactos')

@section('contenido')
<div class="relative flex items-top justify-center min-h-screen  sm:items-center py-4 sm:pt-0">
    <div class="container-fluid mt-5">    
        <div class="row justify-center align-items-center ">
            <div class="col-12">
                <div class="row op rounded p-4 pb-2">
                <div class="col">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class=""><b>CONTACTOS.</b> </h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 pb-4">
                            <div class="d-grid gap-2">
                                <a href="/ncontcreate"class="btn btn-dark" ><i class="fas fa-plus-circle"></i> Agregar contacto</a>
                            </div>
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
                                                <th>Acciones</th>
                                                <th>Contacto</th>
                                                <th>Nombre Contacto</th>
                                                <th>Correo</th>
                                                <th>Telefono contacto</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($contactos as $key => $val)
                                            <tr>
                                                <td class="text-center"><a href="/ncontedit/{{$contactos[$key]['Name']}}"><i class="fas fa-pen"></i></a></td>
                                                <td>{{$contactos[$key]['Name']}}</td>
                                                <td>{{$contactos[$key]['FirstName']." ". $contactos[$key]['MiddleName']." ". $contactos[$key]['LastName']}}</td>
                                                <td>{{$contactos[$key]['E_Mail']}}</td>
                                                <td>
                                                    @if(isset($contactos[$key]['Phone1']))
                                                        {{$contactos[$key]['Phone1']}}
                                                    @elseif(isset($contactos[$key]['Phone2']))
                                                        {{$contactos[$key]['Phone2']}}
                                                    @else
                                                        {{$contactos[$key]['MobilePhone']}}
                                                    @endif
                                                </td>
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