<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control" name="Nombre" id="Nombre"
value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}">
</div>

<div class="form-group">
<label for="ApellidoPaterno" class="control-label">{{'ApellidoPaterno'}}</label>
<input type="text" class="form-control" name="ApellidoPaterno" id="ApellidoPaterno"
value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:''}}">
</div>

<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'ApellidoMaterno'}}</label>
<input type="text" class="form-control" name="ApellidoMaterno" id="ApellidoMaterno"
value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:''}}">
</div>

<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control" name="Correo" id="Correo"
value="{{isset($empleado->Correo)?$empleado->Correo:''}}">
</div>

<div class="form-group">
<label for="Foto" class="control-label">{{'Foto'}}</label>
@if(isset($empleado->Foto))
<br/>
<img src="{{ asset('storage').'/'. $empleado->Foto}}" class="img-thumbnail img-fluid"  alt="" width="200">
<br/>
@endif
<input type="file" class="form-control" name="Foto" id="Foto" 
value="">
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear'?'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{url ('empleados')}}">Regresar</a>