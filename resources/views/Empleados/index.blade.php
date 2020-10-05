@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('content')
<div class="container">
@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
</div>

@endif

<a href="{{url ('empleados/create')}}" class="btn btn-success">Agregar Empleado</a>
<br/>
<br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($empleados as $empleado)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>
            <img src="{{ asset('storage').'/'. $empleado->Foto}}" class="img-thumbnail img-fluid" alt="" width="100">               
            </td>
            <td>{{$empleado->Nombre}} {{$empleado->ApellidoPaterno}} {{$empleado->ApellidoMaterno}}</td>
            <td>{{$empleado->Correo}}</td>
            <td>
            <a class="btn btn-warning" href="{{url ('/empleados/'.$empleado->id.'/edit')}}">Editar</a>    
            
            |
                <form method="post" action="{{url ('/empleados/'.$empleado->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm ('¿Borrar?');">Borrar</button> 
        </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $empleados->links()}}

</div>
@endsection