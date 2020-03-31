<div class="form-group row">
    <label for="nombre" class="col-lg-3 col-form-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-lg-3 col-form-label requerido">Url</label>
    <div class="col-lg-8">
    <input type="text" name="url" id="url" class="form-control" value="{{old('url', $data->url ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="icono" class="col-lg-3 col-form-label">Icono</label>
    <div class="col-lg-8">
        <input type="text" name="icono" id="icono" class="form-control" value="{{old('icono', $data->icono ?? '')}}"/>
    </div>
    <div class="col-lg-1">
        <span id="mostrar-icono" class="fa fa-fw {{old("icono")}}"></span>
    </div>
</div>
