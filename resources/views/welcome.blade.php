@extends('layouts.app')

@section('titulo')
    Usuarios Registrados
@endsection

@section('contenido')
    <div class="h-[400px] w-full p-4">
        <table class="table-auto w-full mt-4 border bg-[aliceblue]">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Identificacion</th>
                    <th class="px-4 py-2">Telefono</th>
                    <th class="px-4 py-2">Direccion</th>
                    <th class="px-4 py-2">Exportar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr >
                        <th class="px-4 py-4">{{ $usuario->id }}</th>
                        <th class="px-4 py-4">{{ $usuario->nombre }}</th>
                        <th class="px-4 py-4">{{ $usuario->identificacion }}</th>
                        <th class="px-4 py-4">{{ $usuario->numero_telefono }}</th>
                        <th class="px-4 py-4">{{ $usuario->direccion }}</th>
                        <th><a href="{{ route('usuarios.exportar-pdf', ['id' => $usuario->id]) }}" class="btn btn-primary">Exportar</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection