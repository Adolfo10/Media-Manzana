@extends('base')
@section ('content')

<div class="container">



<form class="container" method="POST" action="{{ url("/login") }}">                              
{{ csrf_field() }}
    
<br>
  <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">LOGIN</div>
  <div class="card-body">
  
    <label for="exampleInputEmail1">Usuario</label>
    <input name="us"class="form-control"  placeholder="Escribe tu usuario">
    <br>
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" name="pas"class="form-control" placeholder="Escribe tu contraseña">
     
      @if(Session::has('Mensaje'))
      <br>
      <div class="alert alert-info animated bouncInUp" role"alert">
      <strong data-caption-animate="fadeInLeftSmall">{{Session::get("Mensaje")}}</strong>  
      </div>
      @endif

    <br>

  <button type="submit" class="btn btn-warning bt-outline-dark btn btn-primary btn-lg btn-block btn btn-primary btn-sm">Entrar</button>
  </div>
</div>
</form>





    </div>

</div>

@parent
@endsection