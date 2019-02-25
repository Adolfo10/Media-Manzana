@extends('base')
@section('javaextra')

@endsection

@section('Contenido')



<div class="container">
        <form class="container" method="POST" action="{{ url("/altaprod") }}">
            {{ csrf_field() }}
    
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">REGISTRAR TELEFONO</div>
    <div class="card-body">
    

  <div class="card-body">
                        <form method="POST" action="{{url('/altatelefono')}}  ">
                            <div class="form-group">
                                {{csrf_field()}}
                                <label for="idcontacto">Contacto:</label>
                                <select name="idcontacto" id="idcontacto" class="form-control">
                                    @foreach($contacts as $contacto)
                                        <option value="{{$contacto->id}}">{{$contacto->nombre}}</option>
                                        @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Numero:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa Número">
                            </div>
                            @if (Session::has('contactos'))
                                <div class="alert alert-info" role="alert">
                                    <strong>Se almaceno el telefono de: {{Session::get('contactos')->nombre}}</strong>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
      

  </div>
  </div>
  

        </form>
    </div>





@endsection
