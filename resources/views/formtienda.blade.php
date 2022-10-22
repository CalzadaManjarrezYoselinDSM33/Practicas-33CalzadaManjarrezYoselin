@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Formulario de tienda</h2> <br>
<hr>
<form class ="row g-3" action="{{ route('registrotien')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}

  
<div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Clave</label>
    <input type="text" class="form-control" name="clave" value="{{old('clave')}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Nombre Tienda</label>
    <input type="text" class="form-control" name="nombret" value="{{old('nombret')}}">
  </div>
  
  <div class="col-3">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="text" class="form-control-file" name="foto" value="{{old('foto')}}"  >
  </div>
  <div>
  <td>
  <input class="btn btn-outline-success" role="button" type="submit" value="registrar">
  <a href="{{ route('lista_tiendas')}}"><button class="btn btn-outline-success" role="button" type="button">Regresar</button></a>
  </td>
  </div>
</form>
  
@endsection
