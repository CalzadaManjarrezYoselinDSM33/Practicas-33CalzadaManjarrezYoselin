@extends('layouts.layout')
@section('content')
<h2>Editar Tienda</h2> <br>
<hr>
<form action="{{ route('salvartien/{id_tienda}', ['id_tienda' => $tienda->id_tienda]) }}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
{{ method_field('PUT') }}
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Clave</label>
    <input type="text" class="form-control" name="clave" value="{{$tienda->clave}}" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre tienda</label>
    <input type="text" class="form-control" name="nombret" value="{{$tienda->nombret}}">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="text" class="form-control-file" name="foto" value="{{$tienda->foto}}"  >
  </div>
  
   

  
  <td colspan="2">
    <input type="submit" value="salvar registro">
    <a href="{{route('lista_tiendas')}}"><button type="button">Regresar</button></a>
  </td>
 
</form>
@endsection