
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

        //$users->isDirty(); //true
        //$users->isDirty('username'); //true
        //$users->isDirty('nama'); //false
        //$users->isDirty(['nama', 'username']); //true

        //$users->isClean();
        //$users->isClean('username');
        //$users->isClean('nama');
        //$users->isClean(['nama', 'username']);

        $users->save();

        $users->wasChanged();
        $users->wasChanged('username');
        $users->wasChanged('username', 'level_id');
        $users->wasChanged('nama');
        dd($users->wasChanged(['nama', 'username',]));
    }
}
