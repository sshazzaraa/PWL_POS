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
        // Validasi input
        $request->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'level_id' => 'required'
        ]);

        // Buat pengguna baru
        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        // Redirect ke halaman users setelah penyimpanan berhasil
        return redirect('/users');
    }
}
