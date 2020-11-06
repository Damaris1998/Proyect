@extends('plantilla')
@section('contenido')


        
<form class="border p-3 form "method="get"  action="/vehiculos">

<div class="jumbotron text-center ">
    <div class="abs-center">
    @csrf
    <label> 
        <h1 >BIENVENIDOS </h1>
        <h5>Elaborado por: Damaris Jaqueling Picado Espinoza</h5>
        
    </label>

    <button class="btn btn-primary d-block mx-auto">Entrar</button>
</div>
</div>
</form>
@endsection
    

