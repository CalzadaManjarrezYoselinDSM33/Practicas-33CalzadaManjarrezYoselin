@extends('layouts.layout')
@section('content')
<center>
  <h2>Detalle productos</h2>
  <hr>
  <img src="{{ asset ('archivos/prod/' .$detallepro ->foto)}}" style="width:150px"><br>
  <b>Codigo</b>{{$detallepro->codigo}}<br>
  <b>Nombre producto</b>{{$detallepro->nombrep}}<br>
  <b>Cantidad</b>{{$detallepro->cantidad}}<br>
  <b>Costo</b>{{$detallepro->costo}}<br>
  <b>ID tipo</b>{{$detallepro->id_tipo  }}<br>
  <b>ID tienda</b>{{$detallepro->id_tienda }}<br>
  <b>Resultado</b>{{$detallepro->id_productos - 20 }}<br>
  <hr><br>
  <a href="{{route('lista_producto')}}"><button type="button">Regresar</button></a>
  </center>
  @endsection