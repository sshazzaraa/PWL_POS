<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>ID Level Pengguna</th>
            <th>Aksi</th>
        </tr>
        
        @foreach ($data as $users)
        <tr>
            <td>{{ $users->users_id }}</td>
            <td>{{ $users->username }}</td>
            <td>{{ $users->nama }}</td>
            <td>{{ $users->level_id }}</td>
            <td>
                <a href="/user/ubah/{{ $users->users_id }}">Ubah</a>
                <a href="/user/hapus/{{ $users->users_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
        
    </table>
    
</body>
</html>
