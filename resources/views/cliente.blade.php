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
          <label for="NombreInput">Nombre</label>
          <input name="nombre" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese un Nombre">
        </div>
        <div class="form-group">
          <label for="ApellidoPaternoInput">Apellido Paterno</label>
          <input name="apPaterno" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su Apellido Paterno">
        </div>
        <div class="form-group">
          <label for="ApellidoMaternoInput">Apellido Materno</label>
          <input name="apMaterno" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su apellido Materno">
        </div>
        <div class="form-group">
          <label for="CorreoInput"> Edad </label>
          <input name="edad" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese su Edad">
        </div>
      
              <button type="submit" class="btn btn-primary">Enviar </button>
        </div>
      </div>
      
    </div>
  </div>


@endsection