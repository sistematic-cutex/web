@extends('layouts.app')
@section('content')


<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card border-success border mb-3">
                    <div class="card-header"></div>
                    <h1>Detalles de la categoria</h1>
                    <div class="card-body">
                        <table class="table table-centered table-nowrap table-hover mb-0">

                            <!--Inicio de Tabla Detalles-->
                            <tr>
                                <th>Nombre Categoria</th>
                                <td>{{ $category->name }}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
