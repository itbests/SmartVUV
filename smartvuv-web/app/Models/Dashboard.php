<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Model
{
    use HasFactory;

    protected $table = 'menu';
    public $timestamps = false;

    public static function getDataDashboard()
    {
        $user = User::find(Auth::user()->id);
        $profile = $user->profile;

        $menuAll = [];
        return $user;
    }

}
