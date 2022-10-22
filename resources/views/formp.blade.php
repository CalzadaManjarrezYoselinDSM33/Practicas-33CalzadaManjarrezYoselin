@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Formulario de producto</h2> <br>
<hr>
<form class ="row g-3" action="{{ route('registropro')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}

  
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Codigo</label>
    <input type="text" class="form-control" name="codigo" value="{{old('clave')}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Nombre Producto</label>
    <input type="text" class="form-control" name="nombrep" value="{{old('clave')}}">
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" value="{{old('clave')}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Costo</label>
    <input type="text" class="form-control" name="costo"  value="{{old('clave')}}" >
  </div>
  
  <div class="col-4">
  <label for="nivel" class="from-label">Nivel</label>
  <select name="nivel">
    @foreach ($nivels as $nivel)
    <option value="{{$nivel->id_nivel}}">{{$nivel -> id_nivel . ' - ' . $nivel -> nombre}}</option>
      @endforeach
  </select>
  </div
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Id tienda</label>
    <select name="id_tienda" class="form-control">
      @foreach($tienda as $id_tienda)
      <option value="{{$id_tienda->id_tienda}}">{{$id_tienda->id_tienda.'-'.$id_tienda->nombret}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="text" class="form-control-file" name="foto" value="{{old('clave')}}"  >
  </div>
  
  <div>
  <input class="btn btn-outline-success" role="button" type="submit" value="registrar">
  <a href="{{ route('lista_producto')}}"><button class="btn btn-outline-success" role="button" type="button">Regresar</button></a>   
  </div>
</form>

@endsection
