<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class ExportarController extends Controller
{
    public function exportarPDF($id) {
        $usuarios = User::find($id);
    
        if (!$usuarios) {
            abort(404); // O maneja el caso de usuario no encontrado según tus necesidades
        }
    
        $pdf = PDF::loadView('pdf.user', ['usuario' => $usuarios]);
    
        return $pdf->download('usuario_'.$usuarios->id.'.pdf');
}
}
