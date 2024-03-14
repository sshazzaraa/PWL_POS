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
                'username' => 'manager55',
                'nama' => 'Manager55',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]
        );

        $users->username = 'manager56';

        $users->isDirty(); //true
        $users->isDirty('username'); //true
        $users->isDirty('nama'); //false
        $users->isDirty(['nama', 'username']); //true

        $users->isClean();
        $users->isClean('username');
        $users->isClean('nama');
        $users->isClean(['nama', 'username']);

        $users->save();

        $users->isDirty();
        $users->isClean();
        dd($users->isDirty());
    }
}
