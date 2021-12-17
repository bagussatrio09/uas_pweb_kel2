<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['id', 'username', 'name', 'email', 'password', 'kota_tempat_tinggal', 'kode_pos', 'about_me', 'alamat', 'profile_pict_path'];
}
