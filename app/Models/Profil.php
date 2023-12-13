<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Support\Str;

class Profil extends Model
{
    protected $table = 'profil';
    function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
