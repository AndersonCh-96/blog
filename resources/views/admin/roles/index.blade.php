@extends('adminlte::page')

@section('title', 'Blog')

@section('content_header')
<a class="btn btn-secondary btn-sm float-right" href="{{route('admin.roles.create')}}">Agreagar nuevo rol</a>
    <h1>Lista de roles</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        {{session('info')}}
    </div>
@endif
    <div class="card">
        <div class="car-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Rol</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>
                            <td width="10px">
                                <a class="btn btn-sm btn-primary" href="{{route('admin.roles.edit',$role)}}">Editar</a></td>
                            <td  width="10px">
                                <form action="{{route('admin.roles.destroy',$role)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

