
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class loginController extends Controller
{
    //
    public function index()
    {
        return view('layouts.consola');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'email' => 'requerid|email',
            'password' => 'requerid'
        ]);
    }
}
