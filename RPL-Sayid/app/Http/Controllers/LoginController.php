<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show($id)
    {
        $cast = Cast::find($id)->getOriginal();
        return view('cast.show', compact('cast'));
    }
}
