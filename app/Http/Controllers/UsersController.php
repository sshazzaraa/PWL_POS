<?php 
namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'manager 3',
            'password' => Hash::make('12345')
        ];
UserModel::create($data);

        $users = UserModel::all();
        return view('users', ['data' => $users]);
    }
}
