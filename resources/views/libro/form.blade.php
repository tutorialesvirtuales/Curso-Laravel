<div class="form-group row">
    <label for="titulo" class="col-lg-3 col-form-label requerido">Título</label>
    <div class="col-lg-8">
    <input type="text" name="titulo" id="titulo" class="form-control" value="{{old('titulo', $data->titulo ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="isbn" class="col-lg-3 col-form-label requerido">Isbn</label>
    <div class="col-lg-8">
    <input type="text" name="isbn" id="isbn" class="form-control" value="{{old('isbn', $data->isbn ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="autor" class="col-lg-3 col-form-label requerido">Autor</label>
    <div class="col-lg-8">
    <input type="text" name="autor" id="autor" class="form-control" value="{{old('autor', $data->autor ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="cantidad" class="col-lg-3 col-form-label requerido">Cantidad</label>
    <div class="col-lg-8">
    <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{old('cantidad', $data->cantidad ?? '')}}" required/>
    </div>
</div>
<div class="form-group row">
    <label for="editorial" class="col-lg-3 col-form-label">Editorial</label>
    <div class="col-lg-8">
    <input type="text" name="editorial" id="editorial" class="form-control" value="{{old('editorial', $data->editorial ?? '')}}"/>
    </div>
</div>
<div class="form-group row">
    <label for="foto" class="col-lg-3 col-form-label">Caratula</label>
    <div class="col-lg-5">
        <input type="file" name="foto_up" id="foto" data-initial-preview="{{isset($data->foto) ? Storage::url("imagenes/caratulas/$data->foto") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=Caratula+Libro"}}" accept="image/*"/>
    </div>
</div>
