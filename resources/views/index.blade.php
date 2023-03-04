@extends('plantillas.menu')

@section('titulo')
    Inicio

@endsection

@section('contenido')

  <div>
    <a href="{{ route('acerca-de')}}">Acerca de</a>
    <a href="{{ route('facultad')}}">Facultad</a>
    <a href="{{ route('mundo-academico')}}">Mundo academico</a>
    <a href="{{ route('vida-estudiantil')}}">Vida estudiantil</a>
    <a href="{{ route('prog-aca')}}">Programas academicos</a>
    <a href="{{ route('noticias')}}">Noticias</a>
    <a href="{{ route('admision')}}">Admision</a>
    <a href="{{ route('tienda')}}">Tienda</a>

    <h1>prueba de sincronizado</h1>
  </div>

    
    


<a href="{{ route('acerca-de')}}">Acerca de</a>
<a href="{{ route('facultad')}}">Facultad</a>
<a href="{{ route('mundo-academico')}}">Mundo academico</a>
<a href="{{ route('vida-estudiantil')}}">Vida estudiantil</a>
<a href="{{ route('prog-aca')}}">Programas academicos</a>
<a href="{{ route('noticias')}}">Noticias</a>
<a href="{{ route('admision')}}">Admision</a>
<a href="{{ route('tienda')}}">Tienda</a>
<div class="inicio"></div>

@endsection