<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $users = UserModel::with('level')->get();
        return view('user', ['data' => $users]);
    }


    public function tambah()
    {
        return view('user_tambah');
    }

    public function ubah($id)
    {
        $users = UserModel::find($id);
        return view('user_ubah', ['data' => $users]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $users = UserModel::find($id);
        $users->username = $request->username;
        $users->nama = $request->nama;
        $users->password = Hash::make($request->password); // Perbaiki bagian ini
        $users->level_id = $request->level_id;
        $users->save();
        return redirect('/user');
    }

    public function hapus($id)
    {
        $users = UserModel::find($id);
        $users->delete();
        return redirect('/user');
    }
}
