seccion para crear empleados
@extends('layouts.app')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
@section('content')
<div class="container">
<form action="{{url ('/empleados')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{csrf_field ()}} <!-- token de seguridad-->
@include ('empleados.form', ['Modo'=>'crear'])

</form>
</div>
@endsection