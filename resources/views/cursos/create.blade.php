@extends('layouts.plantilla')
@section('title', 'Cursos create')

@section('content')
<h1>En estra página podras crear un  curso</h1>
<form action="{{route('cursos.store')}}" method="POST">

    @csrf
    
    <label >
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>

    @error('name')
        <br>
        <span>*{{$message}}</span>
    @enderror

    <br>
    <label>
        Slug:
        <br>
        <input type="text" name="slug" value="{{old('slug')}}">
    </label>
        

    @error('slug')
        <br>
        <span>*{{$message}}</span>
    @enderror


    <br>
    <label>
        Descripción:
        <br>
        <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label>
    
    @error('descripcion')
        <br>
        <span>*{{$message}}</span>
    @enderror

    <br>
    <label >
        Categoría: 
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>

    @error('categoria')
        <br>
        <span>*{{$message}}</span>
    @enderror

    <br>
    <button type="submit"> Enviar formulario</button>
</form>
@endsection
    
