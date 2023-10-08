@extends('Layout.app')

@section('content')
    
<<<<<<< HEAD
<h1 class="text-center">Formulario 3</h1>
<hr>

   


=======
<h1 class="text-center">Sucursales</h1>
<hr>
<div class="container mb-3 p-3">

<p>Buscar Sucursal</p>

<div class="input-group">
    <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="button">Buscar</button>
    </div>
  </div>
  <h4 class="text-center p-3">Nuevo Registro</h4>

  <form class="form">
    <div class="form-group">
      <label for="exampleFormControlInput1">Codigo</label>
      <input type="number" class="form-control" id="exampleFormControlInput1">
      <label for="exampleFormControlInput1">Nombre</label>
      <input type="text" class="form-control" id="exampleFormControlInput1">
      <label for="exampleFormControlInput1">Encargado</label>
      <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
      <label for="exampleFormControlSelect1">Departamento</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Seleccionar</option>
        <option>San Salvador</option>
        <option>Santa Ana</option>
        <option>Sonsonate</option>
        <option>Cabañas</option>
        <option>La Union</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Comentario</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
  </form> <br>
    <button type="button" class="btn btn-primary">Agregar</button>
    <button type="button" class="btn btn-danger">Eliminar</button>
    <button type="button" class="btn btn-success">Actualizar</button>
  
</div>

<style>
    .container{
        max-width: 600px;
        margin: 0 auto;
        padding: 10px;
    }
    .form{
        background-color: #f5f5f5;
        padding: 15px;
        border: 0vh;
        border-radius: 10px;
    }
 
</style>
>>>>>>> estefany


@endsection