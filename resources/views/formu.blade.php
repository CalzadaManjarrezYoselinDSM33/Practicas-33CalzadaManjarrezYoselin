@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Formulario de usuario</h2> <br>
<hr>
<form class ="row g-3" action="{{ route('registro')}}" method="POST" enctype="multipart/form-data">

  {{csrf_field()}}

  
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Matricula</label>
    <input type="text" class="form-control" name="matricula" value="{{old('clave')}}" >
  </div>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Nombre usuario</label>
    <input type="text" class="form-control" name="nombreu" value="{{old('clave')}}">
  </div>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Apellido paterno</label>
    <input type="text" class="form-control" name="app" value="{{old('clave')}}" >
  </div>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Apellido materno</label>
    <input type="text" class="form-control" name="apm"  value="{{old('clave')}}" >
  </div>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="fech_nac" value="{{old('clave')}}" >
  </div>
  <div class="col-4">
    Femenino: <input type="radio" name="genero" value="Femenino" checked><br>
    Masculino: <input type="radio" name="genero" value="Masculino">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="text" class="form-control-file" name="foto" value="{{old('clave')}}"  >
  </div>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Correo </label>
    <input type="email" class="form-control" name="email" value="{{old('clave')}}" >
  </div>
  <div class="col-4">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="pass" value="{{old('clave')}}" >
  </div>
  <div class="col-4">
  <label for="nivel" class="from-label">Nivel</label>
  <select name="nivel">
    @foreach ($nivels as $nivel)
    <option value="{{$nivel->id_nivel}}">{{$nivel -> id_nivel . ' - ' . $nivel -> nombre}}</option>
      @endforeach
  </select>
  </div>
  <div>
  <td>
  <input  class="btn btn-outline-success" role="button" type="submit" value="Registrar">
  <a href="{{ route('lista_usuario')}}"><button class="btn btn-outline-success" role="button" type="button">Regresar</button></a>
  </td>
  </div>
</form>
  
@endsection
