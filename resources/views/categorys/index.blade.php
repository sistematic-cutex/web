@extends('layouts.app')
@section('content')

<div class="table-responsive">
    <div class="col-sm-12">
        <table class="table table-centered table-nowrap table-hover mb-0">
            <!--Botón Crear-->
            <div class="text-sm-end">
                <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#custom-modal">Crear categoria</button>
            </div>
            <!--Inicio de Tabla crear-->
            <thead>
                <tr>
                    <th></th>
                    <th>Nombre Categoria</th>
                    <th>Descripcion de categoria</th>
                    <th>Telefono</th>
                    <th>Estado</th>
                    <th style="width: 82px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $categorys as $category )
                <tr>
                    <td> {{ $category-> id }}</td>
                    <td class="table-user">
                        <a href= "{{ route('categorias.detalles',$category->id) }}" class="text-body fw-semibold">{{ $category-> business_name }}</a>
                    </td>
                    <td>{{ $category-> address }}</td>
                    <td>{{ $category-> cellphone }}</td>
                    <td>{{ $category-> status }}</td>
                    <td>
                        <form action="{{ route('proveedores.eliminar', $provider->id) }}" method="POST">
                        <a href="{{ route('proveedores.editar', $provider->id) }}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                        <a href="" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
     </div>

</div>
<!-- Modal Crear -->
<div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Crear Categoria</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <form action="{{ route('proveedores.guardar') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre Categoria</label>
                        <input type="text" class="form-control" name="business_name" >
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre del Administrador</label>
                        <input type="text" class="form-control" name="admin_name" >
                    </div>
                    <div class="mb-3">
                        <label for="company" class="form-label">Telefono</label>
                        <input type="text" class="form-control" name="cellphone" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo eléctronico</label>
                        <input type="email" class="form-control" name="email" placeholder="ejemplo@gmail.com">
                    </div>


                    <div class="text-end">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Guardar</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light" onclick="Custombox.close();">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
