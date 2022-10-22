@extends('layouts.layout')
@section('content')
<h2>Editar usuario</h2> <br>
<hr>
<form action="{{ route('salvarni/{id_nivel}', ['id_nivel' => $niveles->id_nivel]) }}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
{{ method_field('PUT') }}
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nivel</label>
    <input type="text" class="form-control" name="nivel" value="{{$niveles->nivel}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Clave</label>
    <input type="text" class="form-control" name="clave" value="{{$niveles->clave}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre nivel</label>
    <input type="text" class="form-control" name="nombre" value="{{$niveles->nombre}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Activo</label>
    <input type="checkbox" class="form-check-input" name="activo" value="1"{{$niveles->activo> 0?'checked':'';}} >
  </div>

  
  <td colspan="2">
    <input style="background-color: green" type="submit" value="salvar registro">
    <a href="{{route('lista_nivel')}}"><button style="background-color: green" type="button">Regresar</button></a>
  </td>
 
</form>
@endsection