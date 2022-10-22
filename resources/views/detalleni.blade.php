@extends('layouts.layout')
@section('content')
<center>
  <h2>Detalle Nivel</h2>
  <hr>
  <b>Clave</b>{{$detalleni->clave}}<br>
  <b>Nombre</b>{{$detalleni->nombre}}<br>
  <b>Resultado</b>{{$detalleni->id_nivel - 20 }}<br>
  <hr><br>
  <a href="{{route('lista_nivel')}}"><button style="background-color: green" type="button">Regresar</button></a>
  </center>
  @endsection