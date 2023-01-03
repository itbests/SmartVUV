<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatingUnit extends Model
{
    use HasFactory;

    protected $table = 'operating_unit';
    public $timestamps = false;

    public function status()
    {
        return $this->belongsTo(Status::class, "status_id", "id");
    }
}
