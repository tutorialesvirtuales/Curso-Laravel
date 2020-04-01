@extends("theme.$theme.layout")
@section('titulo')
Libros Prestados
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/libro-prestamo/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @csrf
        @include('includes.mensaje')
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Libros prestados</h3>
                <div class="card-tools">
                    <a href="{{route('libro-prestamo.crear')}}" class="btn btn-outline-secondary btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i> Prestar nuevo libro
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Título</th>
                            <th>Prestado por</th>
                            <th>Prestado a</th>
                            <th>Fecha prestamo</th>
                            <th>Fecha devolución</th>
                            <th class="width80"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($libros as $data)
                        <tr>
                            <td class="text-center"><img src="{{Storage::url("imagenes/caratulas/" . $data->libro->foto)}}" alt="caratula del libro" style="width:50px"></td>
                            <td>{{$data->libro->titulo}}</td>
                            <td>{{$data->usuario->nombre}}</td>
                            <td>{{$data->prestado_a}}</td>
                            <td>{{$data->fecha_prestamo}}</td>
                            <td class="fecha-devolucion">{{$data->fecha_devolucion ?? 'Prestado'}}</td>
                            <td>
                                @if(!$data->fecha_devolucion)
                                    <a href="{{route('libro-prestamo.devolver', $data->libro->id)}}" class="libro-devolucion btn-accion-tabla tooltipsC" title="Devolver este libro">
                                        <i class="fa fa-fw fa-reply-all"></i>
                                    </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
