@extends('Layout.app')

@section('content')
<link rel="stylesheet" href="./tannia1.css">

<h1 class="text-center">Cotizaciones</h1>
<hr>


<form class="caja">
  <div class="form-group">
    <label for="exampleInputEmail1"># Cotizaci&oacute;n</label>
    <input type="number" class="form-control" id="id" disabled>
  </div>
  <br>
  <div class="form-group">
    <label>Fecha de cotizaci&oacute;n</label>
    <input type="datetime" name="fecha" disabled  value="<?php echo date("Y-m-d\TH-i");?>">
  </div>
  <br>
  <div>
    <label class="selects">Sucursal:</label>
    <select class="form-select form-select-sm">
        <option value="San Salvador"> San Salvador</option>
        <option value="Santa Tecla">Santa Tecla</option>
        <option value="Sonsonate">Sonsonate</option>
    </select>
  </div>
  
  <br>
  <div class="form-group">
    <label>Nombre:</label>
    <input type="text" class="form-control" id="comprador">
  </div>
  <br>
  <div class="form-group">
    <label>DUI:</label>
    <input type="text" class="form-control" id="DUI" placeholder="00000000-0">
  </div>
  <br>
  <div>
    <label class="products">Producto:</label>
    <select class="form-select form-select-sm">
        <option value=" Producto 1"> Producto 1</option>
        <option value=" Producto 2"> Producto 2</option>
        <option value=" Producto 1"> Producto 3</option>
    </select>
  </div>
  <br>
  <div class="form-group">
    <label>Cantidad</label>
    <input type="number" class="form-control" placeholder="0">
  </div>
  <br>
  <div class="form-group">
    <label>Total</label>
    <input type="number" class="form-control" placeholder="$" disabled>
  </div>
  <br>
  

  <button type="submit" class="btn btn-warning">Generar</button>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <button type="submit" class="btn btn-dark">Buscar</button>
  <button type="submit" class="btn btn-danger">Eliminar</button>
</form>



@endsection