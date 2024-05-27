@extends('layouts.plantilla')

@section('title', 'Contáctanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{route('contactanos.store')}}" method="POST"> 

        @csrf


        <label>
            Nombre: 
            <br>
            <input type="text", name="name" value="{{old('name')}}">
        </label>

        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror


        <label>
            Correo: 
            <br>
            <input type="text", name="correo" value="{{old('name')}}">
        </label>

        <br>

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror


        <label>
            Mensaje: 
            <br>
            <textarea name="mensaje" rows="4">{{old('mensaje')}}</textarea>
        </label>

        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>

            <br>
        @enderror

        <button type="submit">
            Enviar mensaje
        </button>


    </form>


    @if (session('info'))
    <script>
        alert("{{session('info')}}");
    </script>       
    @endif
    
@endsection
