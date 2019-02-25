@extends('base')
@section('javaextra')

@endsection

@section('Contenido')



     <div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        Registrar Cliente
      </div>
      <div class="card-body">
         @if($errors->any())
          <div class="alert alert-info animated bounceInUp" role="alert">
            <strong> Tenemos los siguientes errores </strong>
            @foreach($errors->all() as $error)
            <ul>
              <li>{{$error}}</li>
            </ul>
            @endforeach
          </div>
          @endif
        <form action="/registrarClientazo" method="post">
          {{ csrf_field() }}
        <div class="form-group">
          <label for="ModeloInput">Modelo</label>
          <input name="modelo" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese un Modelo">
        </div>
        <div class="form-group">
          <label for="marcaInput">Marca</label>
          <input name="marca" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese una marca">
        </div>
      
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>
@endsection