@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>
@stop

@section('content')
        <div class="container">
                     <!-- "/facultades/registrar" -->
            <a href="{{route('form_registro_fac')}}" class="btn btn-primary">Adicionar</a>
        </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach($faculty as $f)
            <tr>
            <th scope="row">{{$i}}</th>
                <td>{{$f->codFacultad}}</td>
                <td>{{$f->nomFacultad}}</td>
                <td>
                    <a  href="{{route('editar_fac', $f->codFacultad)}}" class="btn btn-success">Editar</a>
                    <a  href="{{route('eliminar_fac', $f->codFacultad)}}" class="btn btn-danger">Eliminar</a>        
                    </td>
            @php
                $i =$i +1;
            @endphp
            </tr>
            @endforeach

        </tbody>
    </table>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
