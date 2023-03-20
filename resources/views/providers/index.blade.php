@extends('layouts.app')
@section('content')
<div class="justify-content-end d-flex">
    <a href="" class="btn btn-info waves-effect waves-light">Crear Porveedor</a>
</div>
<table class="table table-hover mb-0">
    <thead>
        <tr>
            <th></th>
            <th>Nombre Comercial</th>
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $providers as $provider )
        <tr>
           <td> {{ $provider-> id }}</td>
           <td>{{ $provider-> business_name }}</td>
            <td>{{ $provider-> address }}</td>
            <td>{{ $provider-> cellphone }}</td>
            <td>{{ $provider-> status }}</td>
            <td>
                <form action="{{ route('proveedores.eliminar', $provider->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <a href="{{ route('proveedores.detalles',$provider->id) }}">Detalles</a>
                    <a href="{{ route('proveedores.editar', $provider->id)}}">Editar</a>
                    <button type="submit">Eliminar</button>
                </form>

            </td>
        </tr>
        @endforeach
        
        
    </tbody>
</table>
@endsection