@extends('layouts.app')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-success border mb-3">
                    <div class="card-header"></div>
                    <h1>Editar categorias</h1>
                    <div class="card-body">
                        <table class="table table-centered table-nowrap table-hover mb-0">

                            <!--Inicio de Tabla Editars-->
                            <thead>
                                <tr>
                                    <th>Nombre Comercial</th>
                                    <td><input type="text" class="form-control" name="business_name" value="{{ $provider->business_name }}"></td>
                                </tr>
                                <tr>
                                    <th>Nombre del Administrador</th>
                                    <td><input type="text" class="form-control" name="admin_name" value="{{ $provider->admin_name }}"></td>
                                </tr>
                                <tr>
                                    <th>Telefono</th>
                                    <td><input type="text" class="form-control" name="cellphone" value="{{ $provider->cellphone }}"></td>
                                </tr>
                                <tr>
                                    <th>Cantidad</th>
                                    <td><input type="text" class="form-control" name="address" value="{{ $provider->cellphone }}"></td>
                                </tr>

                                <br>
                                <br>
                                <tr>
                                    <th>
                                        <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#custom-modal">Actualizar información</button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <button href= "{{ route('proveedores') }}" type="button" class="btn btn-danger waves-effect waves-light mb-2" data-bs-toggle="modal" data-bs-target="#custom-modal">Cancelar</button>
                                    </th>
                                </tr>

                            </thead>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
