<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function setSession(Request $request)
    {
        if ($request->ajax()) {
            $request->session()->put(
                [
                    'rol_id' => $request->input('rol_id'),
                    'rol_nombre' => $request->input('rol_nombre')
                ]
            );
            return response()->json(['mensaje' => 'ok']);
        } else {
            abort(404);
        }
    }
}
