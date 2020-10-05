seccion para editar empleados
@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('content')
<div class="container">

<form action="{{url ('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field() }}
{{ method_field ('PATCH')}}

@include ('empleados.form', ['Modo'=>'editar'])

</form>
</div>
@endsection