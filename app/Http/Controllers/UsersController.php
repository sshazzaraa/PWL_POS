<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {

        $users = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]
        );

        $users->username = 'manager12';

        $users->wasChanged(); //true
        $users->wasChanged('username'); //true
        $users->wasChanged(['username', 'level_id']); //true
        $users->wasChanged('nama'); //false
        $users->wasChanged(['nama', 'username']); //true

    }
}
