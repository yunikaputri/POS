<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($id, $nama)
    {
        return view('user')
            ->with('id', $id)
            ->with('nama', $nama);
    }
}
