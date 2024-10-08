<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::create(
            [
                'username' => 'manager11',
                'nama' => 'Manager11',
                'password' => Hash::make('12345'),
                'level_id' => 2,
            ]
        );
        $user->username = 'manager12';

        $user -> save();
    
        $user->wasChanged();
        $user->WasChanged('username');
        $user->WasChanged('username', 'level_id');
        $user->WasChanged('nama');

        dd($user->wasChanged(['nama', 'username']));
    }
}
 