<div>{{$libro->titulo}}</div>
<div>{{$libro->isbn}}</div>
<div>{{$libro->autor}}</div>
<div><img src="{{Storage::url("imagenes/caratulas/$libro->foto")}}" alt="Caratula del libro" width="100%"></div>
