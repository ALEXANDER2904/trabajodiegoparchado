<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateController extends Controller
{
    public function edit($id) {
        $usuario = User::findOrFail($id);
        return view('auth.edit', ['usuario' => $usuario]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'nombre' => 'required|min:3',
            'identificacion' => 'required|min:3|unique:users,identificacion,' . $id,
            'numero_telefono' => 'required|min:5',
            'direccion' => 'required|min:2',
        ]);

        $usuario = User::findOrFail($id);

        $usuario->update([
            'nombre' => $request->nombre,
            'identificacion' => $request->identificacion,
            'numero_telefono' => $request->numero_telefono,
            'direccion' => $request->direccion,
        ]);

        $usuarios = User::all();
        return view('welcome', ['usuarios' => $usuarios]);
    }
}
