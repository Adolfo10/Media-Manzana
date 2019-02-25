@extends('base')
@section('javaextra')

@endsection

@section('Contenido')




        <form class="container" method="POST" action="{{ url("/productos") }}">
            {{ csrf_field() }}
    
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">REGISTRAR PRODUCTO</div>
    <div class="card-body">
    

  <div class="form-group">
                                <label for="nom">NOMBRE:</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Ingresa nombre" value="{{old('nom')}}">
                            </div>
                            
                             <div class="form-group">
                                <label for="ap">KILOS</label>
                                <input type="text" class="form-control" id="ap" name="kilos" placeholder="Ingresa Kilos" value="{{old('ap')}}">
                            </div>
                            
                            @if (Session::has('bien'))
                                <div class="alert alert-info  animated fadeInUp" role="alert">
                                    <strong>{{Session::get('bien')}}</strong>
                                </div>
                            @endif
                             @if (Session::has('negativo'))
                                <div class="alert alert-warning  animated fadeInUp" role="alert">
                                    <strong>{{Session::get('negativo')}}</strong>
                                </div>
                            @endif

                            {{--Forma de recuperar valores en select--}}
                            {{--value="**** @if (old('idcontacto')==$contacto->id) selected="true" @endif--}}


                            <button type="submit" class="btn btn-primary btn-block">REGISTRAR</button>

      

  </div>
  </div>
        </form>
        
         <form class="container" method="GET" action="{{ url("/ver") }}">
         <button type="submit"  class="btn btn-primary btn-block">VER PRODUCTOS REGISTRADOS</button>
        </form>   








@endsection