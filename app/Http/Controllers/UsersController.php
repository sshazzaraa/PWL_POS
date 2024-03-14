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
    public function tambah()
    {
        return view('user_tambah');
    }
}
