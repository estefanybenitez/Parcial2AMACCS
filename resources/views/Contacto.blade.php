@extends('Layout.app')

@section('content')

<div class="container">
<h1 class="text-center">Contacto</h1>
<hr>

{{-- insertar contenido  --}}
@if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

       
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar mensaje</button>
        </form>
    </div>
</div>

<style>
    /* Estilos CSS personalizados */
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #D0A9F5;
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
        background-color: #0056b3;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #FF0040;
    }
</style>
@endsection