@extends('layouts.layout')
@section('content')
<h2>Formulario de Producto</h2> <br>
<hr>
<form action="{{ route('salvarpro/{id_productos}', ['id_productos' => $producto->id_productos]) }}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
{{ method_field('PUT') }}
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Codigo</label>
    <input type="text" class="form-control" name="codigo" value="{{$producto->codigo}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre producto</label>
    <input type="text" class="form-control" name="nombrep" value="{{$producto->nombrep}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" name="cantidad" value="{{$producto->cantidad}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Costo</label>
    <input type="text" class="form-control" name="costo"  value="{{$producto->costo}}" >
  </div>
  <td>Nivel</td>
  <select name="nivel">
    @foreach ($nivels as $nivel)
    <option value="{{$nivel->id_nivel}}">{{$nivel -> id_nivel . ' - ' . $nivel -> nombre}}</option>
      @endforeach
  </select>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id tienda</label>
    <select name="id_tienda" class="form-control">
      @foreach($tienda as $id_tienda)
      <option value="{{$id_tienda->id_tienda}}">{{$id_tienda->id_tienda.'-'.$id_tienda->nombret}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="file" class="form-control-file" name="foto" value="{{$producto->foto}}"  >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Activo</label>
    <input type="checkbox" class="form-control" name="activo" value="1"{{$producto->activo> 0?'checked':'';}} >
  </div>

  
  <td colspan="2">
    <input type="submit" value="salvar registro">
    <a href="{{route('lista_producto')}}"><button type="button">Regresar</button></a>
  </td>
 
</form>
@endsection