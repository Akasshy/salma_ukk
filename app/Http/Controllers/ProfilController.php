<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil(){
        return view('profil');
    }

    public function show(){
        $user = User::findOrFail();
        return view('profil', compact('user'));
    }
}
