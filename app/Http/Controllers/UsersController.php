<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = UserModel::all();
        return view('users', ['data' => $users]);
    }

    public function tambah_simpan(Request $request)
    {
        UserModel::create(
            [
                'username' => $request->username,
                'nama' => $request->nama,
                'password' => Hash::make('$request->password'),
                'level_id' => $request->level_id
            ]
        );
        return redirect('/users');
    }
}
