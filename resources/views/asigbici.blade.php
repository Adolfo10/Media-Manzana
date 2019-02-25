@extends('base')
@section('javaextra')

@endsection

@section('Contenido')

  <div class="row justify-content-md-center">
    <div class="col-6">
      <div class="card">
      <div class="card-header">
        <div class="card-body">
    <form action="/asignartriciclo" method="POST" accept-charset="utf-8">
        
        {{ csrf_field() }}
    
     <div class="form-group">
    <label for="inputID" class="col-sm-4 control-label"> Cliente: </label>
     <div class="col-sm"-8>
      <select name="idcliente"id="idcliente" class="form-control">
        @foreach($client as $c)
            <option value="{{ $c->id }}">{{ $c->nombre }}</option>
            @endforeach
      </select>
    </div>
   </div>

        <div class="form-group">
    <label for="inputID" class="col-sm-4 control-label"> Modelo: </label>
     <div class="col-sm"-8>
      <select name="modelo"id="modelo" class="form-control">
        @foreach($bicicleta as $bici)
            <option value="{{ $bici->id }}">{{ $bici->modelo }}</option>
            @endforeach
      </select>
    </div>
   </div>


   <div class="form-group">
    <label for="inputID" class="col-sm-4 control-label"> Marca: </label>
     <div class="col-sm"-8>
      <select name="marca"id="marca" class="form-control">
         @foreach($bicicleta as $bici)
            <option value="{{ $bici->marca }}">{{ $bici->marca }}</option>
            @endforeach
      </select>
    </div>
   </div>
      

          @if(Session::has("cliente"))
          <div class="alert alert-info" role="alert">
            <strong> Modelo de bicicleta del cliente: {{Session::get("cliente")->nombre}} exitoso</strong>
          </div>

              
          @endif
        <button type="submit" class="btn btn-primary btn-block">Enviar </button>
      </form>
</div>
</div>
</div>
</div>
</div>




@endsection