@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
@can('admin.tags.create')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}"> Agreagar etiqueta</a>
@endcan
    <h1>Mostrar listado de etiqueta</h1>
@stop

@section('content')
   
<div class="card">
    
      
   
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->name}}</td>
                    <td width="10px">
                       @can('admin.tags.edit')
                       <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit',$tag)}}">
                        Editar
                    </a>
                       @endcan
                    </td>
                    <td width="10px">
                      @can('admin.tags.destroy')
                      <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                        @csrf
                         @method('delete')
                         <button type="submit" class="btn btn-danger btn-sm">
                             Eliminar
                         </button>
                         </form>
                      @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

