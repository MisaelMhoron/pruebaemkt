@extends('layouts.layout')
@section('content')
<!-- ----------- slider ------------------------->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/img1.jpg" alt="Los Angeles" width="100%" height="200px">
      <div class="carousel-caption">
        <h3>IMAGEN 1</h3>
        <p>lorem ipsum dolor sit amet consectetur adipiscing elit</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/images/img2.jpg" alt="Chicago" width="100%" height="200px">
      <div class="carousel-caption">
        <h3>IMAGEN 2</h3>
        <p>lorem ipsum dolor sit amet consectetur adipiscing elit</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="/images/img3.jpg" alt="New York" width="100%" height="200px">
      <div class="carousel-caption">
        <h3>IMAGEN 3</h3>
        <p>lorem ipsum dolor sit amet consectetur adipiscing elit</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div><br>
<!-- -----------grid de 3 columnas---------------------------------- -->

<div class="container">
  <div class="row">
    <div class="col-sm">
    <img src="/images/imga.jpg" alt="New York" width="80%" height="200px">
    </div>
    <div class="col-sm">
    <img src="/images/imgb.jpg" alt="New York" width="80%" height="200px">
    </div>
    <div class="col-sm">
    <img src="/images/imgc.jpg" alt="New York" width="80%" height="200px">
    </div>
  </div>
</div><br>
<!-- -----------------FORMULARIO---------------------------------- -->
<h4 style="font-family: Arial;text-align:center;">Completa el formulario</h4><br>
<div  class="col-md-12 col-md-offset-3">
		
<form method="POST" action="{{ route('somos-emkt.store') }}"  role="form" enctype= "multipart/form-data">

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido">Apellido</label>
      <input type="text" name= "apellido" class="form-control" id="apellido" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="edad">Edad</label>
      <input type="number" name="edad" class="form-control" id="edad" placeholder="">
    </div>
    <div class="form-group col-md-6">
      <label for="email">Email</label>
      <input type="text" name= "email" class="form-control" id="email" placeholder="">
    </div>
    <div class="form-group col-md-6">
    <label class="mr-sm-2" for="inlineFormCustomSelect">Habilidades</label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="1">PHP</option>
        <option value="2">HTML</option>
        <option value="3">CSS</option>
        <option value="4">LARAVEL</option>
        <option value="5">JAVA</option>
        <option value="6">JS</option>
        <option value="7">ANGULAR</option>
        <option value="8">NODE</option>
        <option value="9">LINUX</option>
        <option value="10">SERVIDORES</option>
      </select>
    
      
    </div>
  </div>
  <div class="col text-center">

  <button style="text-align:center;" type="submit" class="btn btn-primary">Enviar</button>
</div> <br>
</form>
@endsection
