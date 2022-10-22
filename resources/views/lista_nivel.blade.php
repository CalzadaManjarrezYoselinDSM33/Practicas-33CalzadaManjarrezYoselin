@extends('layouts.layout')
@section('content')
<h2 class= " container-fluid" style="background-color: #75ff53">Lista de nivel</h2> <br>
<hr>
<table class="table table table-striped  table-dark">
<a class="btn btn-outline-success" href="{{ route('formni')}}"role="button">Registro</a>

<thead>
  </thead>
    <tr>
        <td>id_nivel</td>
        <td>nivel</td>
        <td>clave</td>
        <td>nombre</td>
        <td>activo</td>
        <td>     </td>
      
        
        
        
    </tr>
    @foreach($nivel1 as $nivel)
    <tr>
        <td>{{$nivel-> id_nivel}}</td>
        <td>{{$nivel-> nivel}}</td>
        <td>{{$nivel-> clave}}</td>
        <td>{{$nivel-> nombre}}</td>
        <td>
            @if($nivel->activo ==1)
        <b style="color: #0f0;">Disponible</b>
        @else
        <b style="color: #f00;">No disponible</b>
        @endif
    </td>
      
    
    
<td>
<a href="{{ route('detalleni/{id_nivel}', ['id_nivel' => $nivel->id_nivel]) }}"><button class="btn btn-outline-success" role="button">Detalle</button></a>&nbsp;
    <a href="{{ route('editarni',['id_nivel' => $nivel->id_nivel])}}"><button class="btn btn-outline-success" role="button">Editar</button></a>&nbsp;
    <a href="{{ route('borrarni/{id_nivel}',['id_nivel' => $nivel->id_nivel])}}" onclick="return confirm ('Se requiere confirmar su accion!!!')"><button class="btn btn-outline-success" role="button">borrar</button></a>&nbsp;
</td>
</tr>
@endforeach   
</table>   
@endsection