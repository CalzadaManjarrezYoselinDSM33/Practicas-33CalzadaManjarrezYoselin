@extends('layouts.layout')
@section('content')

    <h2 class= " container-fluid" style="background-color: #75ff53">Lista de tiendas</h2> <br>
<hr>

<table class="table table table-striped  table-dark">
<a class="btn btn-outline-success" href="{{ route('formtienda')}}"role="button">Registro</a>
<thead>
  </thead>
    <tr >
        <td>id_tienda</td> 
        <td>clave</td>
        <td>nombret</td>
        <td>foto</td>
        <td>  </td>
        <td>   </td>
        
    </tr>
    @foreach($tienda1 as $tiendas)
    <tr>
        <td>{{$tiendas-> id_tienda}}</td>
        <td>{{$tiendas-> clave}}</td>
        <td>{{$tiendas-> nombret}}</td>
        <td>{{$tiendas-> foto}}</td>
        <td><img src="{{ asset ('archivos/tiend/'.$tiendas->foto)}}"style="width:50px"></td>
    
    

<td>
<a href="{{ route('detalletien/{id_tienda}', ['id_tienda' => $tiendas->id_tienda]) }}"><button class="btn btn-outline-success" role="button">Detalle</button></a>&nbsp;
    <a href="{{ route('editartien',['id_tienda' => $tiendas->id_tienda])}}"><button class="btn btn-outline-success" role="button">Editar</button></a>&nbsp;
    <a href="{{ route('borrartien/{id_tienda}',['id_tienda' => $tiendas->id_tienda])}}" onclick="return confirm ('Se requiere confirmar su accion!!!')"><button class="btn btn-outline-success" role="button">borrar</button></a>&nbsp;
</td>
</tr>
@endforeach
</table>
@endsection