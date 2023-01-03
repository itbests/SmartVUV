<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'user_profile';
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'profile_id', 'register_date', 'status_id'
    ];
}
