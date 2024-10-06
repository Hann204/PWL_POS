<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Prepare data for a new user
       /* $data = [
            'username' => 'customer-1',
            'nama' => 'pelanggan',
            'password' => Hash::make('12345'), // Hashing the password
            'level_id' => 4
        ];
        UserModel::created($data);*/

        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1') -> update($data);
        
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
