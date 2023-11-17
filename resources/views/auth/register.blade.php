@extends('layouts.app')

@section('titulo')
    Registrate
@endsection

@section('contenido')
<div class="flex justify-center mt-30">
    <div class="md:w-5/12 shadow-xl rounded-xl p-10">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="nombre">Nombre</label>
                <input class="border p-3 w-full rounded-lg" type="text" name="nombre" id="nombre" placeholder="Nombre">
                @error('nombre')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="identificacion">Documento de identificacion</label>
                <input class="border p-3 w-full rounded-lg" type="text" name="identificacion" id="identificacion" placeholder="Ingrese la identificacion">
                @error('identificacion')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="numero_telefono">Telefono</label>
                <input class="border p-3 w-full rounded-lg" type="text" name="numero_telefono" id="numero_telefono" placeholder="Ingrese telefono">
                @error('numero_telefono')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-5">
                <label class="mb-2 block uppercase text-gray-500 font-bold" for="direccion">Direccion</label>
                <input class="border p-3 w-full rounded-lg" type="text" name="direccion" id="direccion" placeholder="Ingrese la direccion">
                @error('direccion')
                    <p class="bg-blue-500 text-white rounded-lg text-sm p-1 text-center">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="submit" value="Registrar" class="p-3 bg-red-500 w-full rounded-xl mt-3 font-bold text-white cursor-pointer hover:bg-red-400 transition-colors uppercase">
            </div>
        </form>
    </div>
</div>
@endsection