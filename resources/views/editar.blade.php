@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Editar de usuario</h2> <br>
<hr>
<form class ="row g-3"action="{{ route('salvar/{id_usuario}', ['id_usuario' => $usuarios->id_usuario]) }}" method="POST" enctype="multipart/form-data">

  {{ csrf_field() }}
{{ method_field('PUT') }}
  
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Matricula</label>
    <input type="text" class="form-control" name="matricula" value="{{$usuarios->matricula}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Nombre usuario</label>
    <input type="text" class="form-control" name="nombreu" value="{{$usuarios->nombreu}}">
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Apellido paterno</label>
    <input type="text" class="form-control" name="app" value="{{$usuarios->app}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Apellido materno</label>
    <input type="text" class="form-control" name="apm"  value="{{$usuarios->apm}}" >
  </div>
  <div class="col-3">
    <label for="exampleInputPassword1" class="form-label">Fecha de nacimiento</label>
    <input type="text" class="form-control" name="fech_nac" value="{{$usuarios->fech_nac}}" >
  </div>
  <div class="col-3">
    Femenino: <input type="radio" name="genero" value="Femenino" {{$usuarios->genero == "Femenino"?'checked':'';}}><br>
    Masculino: <input type="radio" name="genero" value="Masculino" {{$usuarios->genero == "Masculino"?'checked':'';}}>
  </div>
  <div class="form-group col-6">
    <label for="exampleFormControlFile1">Foto</label>
    <input type="text" class="form-control-file" name="foto" value="{{$usuarios->foto}}"  >
  </div>
  <div class="col-6">
    <label for="exampleInputPassword1" class="form-label">Correo </label>
    <input type="email" class="form-control" name="email" value="{{$usuarios->email}}" >
  </div>

  <div class="col-6">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="pass" value="{{$usuarios->pass}}" >
  </div >


  <div class="col-6">
  <label for="nivel" class="from-label">Nivel</label>
  <select name="nivel" class="from-select">
    @foreach ($nivels as $nivel)
    <option value="{{$nivel->id_nivel}}">{{$nivel -> id_nivel . ' - ' . $nivel -> nombre}}</option>
      @endforeach
  </select>
  </div>


  <div class="col-md-6 text-center">
    <label for="exampleInputPassword1" class="form-label">Activo</label>
    <input type="checkbox" class="form-check-input" name="activo" value="1"{{$usuarios->activo> 0?'checked':'';}} >
  </div>

  
  <div class="col-12 text-center">
    <input class="btn" style="background-color: green" type="submit" value="salvar registro">
    <a href="{{route('lista_usuario')}}">
      <button class="btn" style="background-color: green" type="button">Regresar</button></a>
</div>
 
</form>
@endsection