@extends('layouts.layout')
@section('content')

  <h2  class= "container-fluid" style="background-color: #75ff53">Detalle Usuario</h2>
  <hr>
  <center>
  <img src="{{ asset ('archivos/usu/' .$detalle ->foto)}}" style="width:150px"><br>
  <h3> Nombre: {{$detalle->app . ' ' . $detalle->apm. ', ' .$detalle->nombreu}} </h3>
  <b>Matricula</b>{{$detalle->matricula}}<br>
  <b>Fecha Nacimiento</b>{{$detalle->fech_nac}}<br>
  <b>Genero</b>{{$detalle->genero}}<br>
  <b>Email</b>{{$detalle->email}}<br>
  <b>Contraseña</b>{{$detalle->pass}}<br>
  <b>Resultado</b>{{$detalle->id_usuario - 20 }}<br>
  <hr><br>
  <a href="{{route('lista_usuario')}}"><button style="background-color: green" type="button">Regresar</button></a>
  </center>
  @endsection