@extends('Layout.app')

@section('content')
<h1 class="text-center">Formulario 5</h1>
<hr>
{{-- insertar contenido  --}}
<<<<<<< HEAD
<<<<<<< HEAD
<div class="container">
    <h1>Formulario de Cobro</h1>
    <form>
        @csrf
        <div class="form-group">
            <label for="monto">Monto a Cobrar:</label>
            <input type="number" name="monto" id="monto" class="form-control">
        </div>
        <div class="form-group">
            <label for="tarjeta">Número de Tarjeta:</label>
            <input type="text" name="tarjeta" id="tarjeta" class="form-control">
        </div>
        <div class="form-group">
            <label for="fecha">Fecha de Vencimiento:</label>
            <input type="text" name="fecha" id="fecha" class="form-control">
        </div>
        <div class="form-group">
            <label for="cvv">CVV:</label>
            <input type="text" name="cvv" id="cvv" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Cobrar</button>
    </form>
</div>

<style>
    /* Estilos CSS personalizados */
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #E2A9F3;
        border-radius: 5px;
    }

    h1 {
        color: #333;
    }

    p {
        font-size: 18px;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #FF0080;
    }
</style>
=======
=======
>>>>>>> estefany


    



<<<<<<< HEAD
>>>>>>> estefany
=======
>>>>>>> estefany

@endsection