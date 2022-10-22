@extends('layouts.layout')
@section('content')

<h2 class= " container-fluid" style="background-color: #75ff53">Lista de usuarios</h2> <br>
<hr>
<table class="table table table-striped  table-dark" >
    
<a class="btn btn-outline-success" href="{{ route('formu')}}"role="button">Registro</a>

<thead>
  </thead>
    <tr>
        <td>id_usuario</td>
        <td>matricula</td>
        <td>nombreu</td>
        <td>app</td>
        <td>apm</td>
        <td>fech_nac</td>
        <td>genero</td>
        <td>foto</td>
        <td>email</td>
        <td>pass</td>
        <td>nivel</td>
        <td>activo</td>
        <td>   </td>
        <td>   </td>
        <td>   </td>
        <td>   </td>
    </tr>
    @foreach($usuarios1 as $usuarios)
    <tr>
        <td>{{$usuarios-> id_usuario}}</td>
        <td>{{$usuarios-> matricula}}</td>
        <td>{{$usuarios-> nombreu}}</td>
        <td>{{$usuarios-> app}}</td>
        <td>{{$usuarios-> apm}}</td>
        <td>{{$usuarios-> fech_nac}}</td>
        <td>{{$usuarios-> genero}}</td>
        <td>{{$usuarios-> foto}}</td>
        <td><img src="{{asset ('archivos/usu/'.$usuarios-> foto)}}"style="width:50px"></td>
        <td>{{$usuarios-> email}}</td>
        <td>{{$usuarios-> pass}}</td>
        <td>
            @if($usuarios->nivel ==10)
        <b style="color: #0f0;">Empleado</b>
        @elseif($usuarios->nivel ==11)
        <b style="color: #0f0;">Gerente</b>
        @elseif($usuarios->nivel ==12)
        <b style="color: #0f0;">Usuario</b>
        @endif
    </td>
        <td>
        @if($usuarios->activo ==1)
        <b style="color: #0f0;">Activo</b>
        @else
        <b style="color: #f00;">No activo</b>
        @endif
        </td>
        
    
    

<td>
    <a href="{{ route('detalle/{id_usuario}', ['id_usuario' => $usuarios->id_usuario]) }}"><button class="btn btn-outline-success" role="button">Detalle</button></a>&nbsp;
    
    <td><a href="{{ route('editar',['id_usuario' => $usuarios->id_usuario])}}"><button class="btn btn-outline-success" role="button">Editar</button></a>&nbsp;
    </td>
    <td><a href="{{ route('borrar/{id_usuario}',['id_usuario' => $usuarios->id_usuario])}}" onclick="return confirm ('Se requiere confirmar su accion!!!')"><button class="btn btn-outline-success" role="button">Borrar</button></a>&nbsp;
    </td>
</td>
</tr>
@endforeach
</table>
@endsection