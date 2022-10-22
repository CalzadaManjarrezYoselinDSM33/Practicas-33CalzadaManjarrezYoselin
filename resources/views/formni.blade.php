@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Formulario de nivel</h2> <br>
<hr>
<form class ="row g-3" action="{{ route('registroni')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Nivel</label>
    <input type="text" class="form-control" name="nivel" value="{{old('clave')}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Clave</label>
    <input type="text" class="form-control" name="clave" value="{{old('clave')}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Nombre nivel</label>
    <input type="text" class="form-control" name="nombre" value="{{old('clave')}}" >
  </div>
 <div>
 <input class="btn btn-outline-success" role="button" type="submit" value="registrar">
  <a href="{{ route('lista_nivel')}}"><button class="btn btn-outline-success" role="button" type="button">Regresar</button></a>   
 </div>
 
</form>

@endsection
