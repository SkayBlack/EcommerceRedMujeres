@extends('layouts.app')
@section('main')
<div class="container">
    <div class="justify-content-center">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div>
        @endif
        <div class="card">
            <div class="card-header">Permisos
                @can('role-create')
                <span class="float-right">
                    <a class="btn btn-primary" href="{{ route('permissions.create') }}">Nuevo Permiso</a>
                </span>
                @endcan
            </div>
            <div class="card-body overflow-auto">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th width="280px">Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $permission)
                        <tr>
                            <td>{{ $permission->id }}</td>
                            <td>{{ $permission->name }}</td>
                            <td>
                                <a class="btn btn-success"
                                    href="{{ route('permissions.show',$permission->id) }}">Mostrar</a>
                                @can('role-edit')
                                <a class="btn btn-primary"
                                    href="{{ route('permissions.edit',$permission->id) }}">Editar</a>
                                @endcan
                                @can('role-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy',
                                $permission->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $data->appends($_GET)->links() }}
            </div>
        </div>
    </div>
</div>
@endsection