@extends('base')
@section('javaextra')

@endsection

@section('Contenido')



<div class="container">
        <form class="container" method="POST" action="{{ url("/altaprod") }}">
            {{ csrf_field() }}
    
    <div class="card text-white bg-warning mb-3" style="max-width: 25rem;">
    <div class="card-header">  MOSTRAR TODAS LAS PERSONAS</div>
    <div class="card-body">
  
                    <div class="card-body">
                       <ul>
                            @forelse($contacts as $contact)
                                <li>{{$contact->nombre}} {{$contact->apaterno}} {{$contact->amaterno}}</li>
                            @empty
                                <li>No hay usuarios registraods.</li>
                            @endforelse
                        </ul>
                    </div>
            <a href="/consulta1" class="btn btn-outline-info btn-block">VER PERSONAS CON NOMBRE ADOLFO</a>

  </div>
  </div>
  </div>
  </form>
    </div>


@endsection