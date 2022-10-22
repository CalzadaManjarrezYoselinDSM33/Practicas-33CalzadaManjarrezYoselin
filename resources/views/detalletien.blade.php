@extends('layouts.layout')
@section('content')
  <h2>Detalle Tienda</h2>
  <hr>
  <img src="{{ asset ('archivos/tiend/' .$detalletien ->foto)}}" style="width:150px"><br>
  <b>Clave</b>{{$detalletien->clave}}<br>
  <b>Nombre tienda</b>{{$detalletien->nombret}}<br>
  <b>Resultado</b>{{$detalletien->id_tienda - 20 }}<br>
  <hr><br>
  <a href="{{route('lista_tiendas')}}"><button type="button">Regresar</button></a>

  @endsection