@extends('Layout.app')

@section('content')
<link rel="stylesheet" href="./servicios.css">

    
<h1 class="text-center">Servicios</h1>
<hr>
<!--Parte Tannia-->


<!--INTRO-->
<div id="intro">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
        aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
        deserunt mollit anim id est laborum.</p>
</div>



<!--Divs informativos-->
<div class="card-group mt-3" >
    <div class="card" style="width: 18rem;" id="divservicio">
    <img class="card-img-top" src="./imgs/serv1.png" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <a href="#" class="btn btn-primary">Entrar</a>

    </div>


    <div class="card" style="width: 18rem;" id="divservicio">
    <img class="card-img-top" src="./imgs/serv3.png" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <a href="#" class="btn btn-primary">Entrar</a>

    </div>


    <div class="card" style="width: 18rem;" id="divservicio">
    <img class="card-img-top" src="./imgs/serv4.png" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <a href="#" class="btn btn-primary">Entrar</a>

    </div>
</div>


   




@endsection