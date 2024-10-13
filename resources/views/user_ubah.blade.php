<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form ubah data user</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>
    
    <form action="{{ url('/user/ubah_simpan/' . $data->user_id) }}" method="post">
        {{ csrf_field() }}
        {{method_field('PUT')}}

        <label>Username</label>
        <input type="text" name="username" value={{$data->username}}>
        <label>Nama</label>
        <input type="text" name="nama" value={{$data->nama}}>
        <label>Password</label>
        <input type="password" name="password" value={{$data->password}}>
        <label>Level id</label>
        <input type="number" name="level_id" value={{$data->level_id}}>
        <br><br>
        <input type="submit" value="Ubah" class="btn btn-success">
    </form>
</body>
</html>