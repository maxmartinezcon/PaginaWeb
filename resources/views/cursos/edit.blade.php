@extends('layouts.plantilla')
@section('title', 'Cursos edit')

@section('content')
<h1>En estra página podras editar un curso </h1>
<div class="container">
<form action="{{route('cursos.update', $curso)}}" method="post">

    @csrf
    @method('put')
    
    <label for='name' class='form-label'>
        Nombre:
        <br>
        <input type="text" name="name" value={{old('name', $curso->name)}} class='form-control'>
    </label>

    @error('name')
        <br>
        <span>*{{$message}}</span>
    @enderror

    <br>
    <label>
        Slug:
        <br>
        <input type="text" name="slug" value="{{old('slug', $curso->slug)}}">
    </label>
        

    @error('slug')
        <br>
        <span>*{{$message}}</span>
    @enderror



    <br>
    <label>
        Descripción:
        <br>
        <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
    </label>

    @error('descripcion')
        <br>
        <span>*{{$message}}</span>
    @enderror

    <br>
    <label >
        Categoría: 
        <br>
        <input type="text" name="categoria" value={{old('categoria', $curso->categoria)}}>
    </label>

    @error('categoria')
        <br>
        <span>*{{$message}}</span>
    @enderror

    <br>
    <button type="submit"> Actualizar formulario</button>

</form>
</div>
@endsection