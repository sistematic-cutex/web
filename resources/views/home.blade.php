@extends('layouts.app')

@section('content')

@switch(Auth::user()->rol_id)
    @case(1)
        Administrador
        @break
        @case(2)
        Vendedor
        @break
        @case(3)
        Auxiliar
        @break
@endswitch





@endsection
