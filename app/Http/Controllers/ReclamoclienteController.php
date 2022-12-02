<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Http\Request;

class ReclamoclienteController extends Controller
{
    //
    public function Reclamos()
    {
        return view('layouts.Reclamocliente');
    }


}
