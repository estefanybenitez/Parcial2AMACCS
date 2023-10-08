@extends('Layout.app')

@section('content')
<link rel="stylesheet" href="./tannia.css">



<h1 class="text-center">Control de Ventas - Sucursales</h1>
<hr>


<form class="caja">
  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="number" class="form-control" id="id" disabled>
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
  <div>
    <label class="selects">Vendedor:</label>
    <select class="form-select form-select-sm">
        <option value="Tannia"> Tannia Arevalo</option>
        <option value="Vanessa">Vanessa Amaya</option>
        <option value="Erikson">Erikson Polanco</option>
    </select>
  </div>
  <br>
  <div class="form-group">
    <label>Nombre Comprador:</label>
    <input type="text" class="form-control" id="comprador">
  </div>
  <br>
  <div class="form-group">
    <label>DUI:</label>
    <input type="text" class="form-control" id="DUI" placeholder="00000000-0">
  </div>
  <br>
  <div class="form-group">
    <label>Cantidad</label>
    <input type="number" class="form-control" placeholder="0">
  </div>
  <br>
  <div class="form-group">
    <label>Total</label>
    <input type="number" class="form-control" placeholder="$">
  </div>
  <br>
  <div class="form-group">
    <label>Fecha de compra</label>
    <input type="date" class="form-control">
  </div>

  <button type="submit" class="btn btn-warning">Registrar</button>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <button type="submit" class="btn btn-dark">Buscar</button>
  <button type="submit" class="btn btn-danger">Eliminar</button>
</form>





@endsection