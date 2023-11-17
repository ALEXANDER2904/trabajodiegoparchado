<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(Request $request) {
        $usuarios = User::all();
        return view('auth.register', ['usuarios' => $usuarios]);
    }

    public function store(Request $request) {
        // $request->request->add(['identificacion'=>Str::slug($request->identificacion)]);

        $this->validate($request, [
            'nombre'=> 'required | min:3',
            'identificacion'=> 'required | min:3 | unique:users',
            'numero_telefono'=> 'required | min:5',
            'direccion'=> 'required | min:2'
        ]);

        User::create([
            'nombre'=> $request->nombre,
            'identificacion'=> $request->identificacion,
            'numero_telefono'=> $request->numero_telefono,
            'direccion'=> $request->direccion,
        ]);

        $usuarios = User::all();
        return view('welcome', ['usuarios' => $usuarios]);
    }

}
