@extends('base')
@section('javaextra')

@endsection

@section('Contenido')




        <form class="container" method="POST" action="{{ url("/productos") }}">
            {{ csrf_field() }}
    
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">REGISTRAR PERSONAS</div>
    <div class="card-body">
    

  <div class="form-group">
                                <label for="nom">Nombre:</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Ingresa nombre" value="{{old('nom')}}">
                            </div>
                            
                             <div class="form-group">
                                <label for="ap">Apelldio paterno</label>
                                <input type="text" class="form-control" id="ap" name="ap" placeholder="Ingresa APaterno" value="{{old('ap')}}">
                            </div>
                            <div class="form-group">
                                <label for="am">Apellido materno:</label>
                                <input type="text" class="form-control" id="am" name="am" placeholder="Ingresa AMaterno" value="{{old('am')}}">
                            </div>
                            @if (Session::has('bien'))
                                <div class="alert alert-info  animated fadeInUp" role="alert">
                                    <strong>{{Session::get('bien')}</strong>
                                </div>
                            @endif

                            {{--Forma de recuperar valores en select--}}
                            {{--value="**** @if (old('idcontacto')==$contacto->id) selected="true" @endif--}}


                            <button type="submit" class="btn btn-primary">Submit</button>

      

  </div>
  </div>
  

        </form>
    








@endsection