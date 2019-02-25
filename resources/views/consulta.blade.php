@extends('base')
@section('javaextra')

@endsection

@section('Contenido')

<div class="container">
        <form class="container" method="GET" action="{{ url("/ver") }}">
            {{ csrf_field() }}
    
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">  PRODUCTOS </div>
    <div class="card-body">
  <div class="card-body">
                    <div class="card-body">                                            
      <table class="table table-striped table-dark table-responsive-lg">
        <thead>
        <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">KILOS</th>            
        </tr>
        </thead>
        <tbody>

        @forelse($contacts as $contact)
            <tr>
                <td>{{$contact->nombre}}</td>
                <td>{{$contact->kilos}}</td>   
                 @empty
                 <td>No hay usuarios registraods.</td>
                 @endforelse               
            </tr>        

        </tbody>
    </table>



                    </div>
  </div>
  </div>
  </div>
  <button type="submit"  class="btn btn-primary btn-block">INGRESA PRODUCTO</button>
  </form>
    </div>
     <form class="container" method="GET" action="{{ url("/productos") }}">
     <button type="submit"  class="btn btn-primary btn-block">INGRESA PRODUCTO</button>
     </form>















@endsection
