@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Lista de productos</h2> <br>
<hr>
<table class="table table table-striped  table-dark">
<a class="btn btn-outline-success" href="{{ route('formp')}}"role="button">Registro</a>
    
<thead>
  </thead>
    <tr>
        <td>id_productos</td>
        <td>codigo</td>
        <td>nombrep</td>
        <td>cantidad</td>
        <td>costo</td>
        <td>id_tipo</td>
        <td>id_tienda</td>
        <td>activo</td>
         <td>foto</td>
         <td>    </td>
         <td>    </td>
         
    </tr>
    @foreach($producto2 as $producto)
    <tr>
        <td>{{$producto-> id_productos}}</td>
        <td>{{$producto-> codigo}}</td>
        <td>{{$producto-> nombrep}}</td>
        <td>{{$producto-> cantidad}}</td>
        <td>{{$producto-> costo}}</td>
        <td>    
            @if($producto->id_tipo ==10)
        <b style="color: #0f0;">Empleado</b>
        @elseif($producto->id_tipo ==11)
        <b style="color: #0f0;">Gerente</b>
        @elseif($producto->id_tipo ==12)
        <b style="color: #0f0;">Usuario</b>
        @endif
    </td>
        <td>{{$producto-> id_tienda}}</td>
        <td>
            @if($producto->activo ==1)
        <b style="color: #0f0;">Disponible</b>
        @else
        <b style="color: #f00;">No disponible</b>
        @endif
    </td>
        
        <td>{{$producto-> foto}}</td>
        <td><img src="{{asset ('archivos/prod/'.$producto-> foto)}}"style="width:50px"></td>
    
<td>
    <a href="{{ route('detallepro/{id_productos}', ['id_productos' => $producto->id_productos]) }}"><button class="btn btn-outline-success" role="button">Detalle</button></a>&nbsp;
    <a href="{{ route('editarpro',['id_productos' => $producto->id_productos])}}"><button class="btn btn-outline-success" role="button">Editar</button></a>&nbsp;
    <a href="{{ route('borrarpro/{id_productos}',['id_productos' => $producto->id_productos])}}" onclick="return confirm ('Se requiere confirmar su accion!!!')"><button class="btn btn-outline-success" role="button">Borrar</button></a>&nbsp;
    
</td>
</tr>
    @endforeach
</table>
@endsection