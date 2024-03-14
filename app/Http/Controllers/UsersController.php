
<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Buat pengguna baru
        $user = UserModel::create([
            'username' => 'manager11',
            'nama' => 'Manager11',
            'password' => hash::make('12345'),
            'level_id' => 2,
        ]);

        // Ubah username pengguna yang sudah ada
        $user->username = 'manager12';

        // Simpan perubahan
        $user->save();

        // Periksa apakah ada perubahan pada pengguna
        $wasChangedAll = $user->wasChanged(); // true, karena ada perubahan
        $wasChangedUsername = $user->wasChanged('username'); // true, karena username berubah
        $wasChangedUsernameLevelId = $user->wasChanged(['username', 'level_id']); // true, karena username atau level_id berubah
        $wasChangedNama = $user->wasChanged('nama'); // false, karena nama tidak berubah

        // Output hasil
        dd($wasChangedAll, $wasChangedUsername, $wasChangedUsernameLevelId, $wasChangedNama);
    }
}
