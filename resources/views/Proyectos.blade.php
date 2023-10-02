@extends('Layout.app')

@section('content')
<h1 class="text-center">Proyectos</h1>
<hr>

{{-- insertar contenido  --}}

<p style="padding: 15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio id,
    dignissimos natus et exercitationem praesentium perspiciatis officia
    aperiam blanditiis voluptates.
</p>

<div style="text-align: center;">
    <div style="display: inline-block; margin: 10px; text-align: center;">
        <img src="{{ asset('images/App.jpg') }}" style="width: 300px;">
        <h4>Apps</h4>
    </div>

    <div style="display: inline-block; margin: 10px; text-align: center;">
        <img src="{{ asset('images/Desktop.jpg') }}" style="width: 260px;">
        <h4>Escritorio</h4>
    </div>

    <div style="display: inline-block; margin: 10px; text-align: center;">
        <img src="{{ asset('images/Web.jpg') }}" style="width: 300px;">
        <h4>Web</h4>
    </div>
</div>

@endsection