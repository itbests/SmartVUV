<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $table = 'status';
    public $timestamps = false;

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    static public function comboBox()
    {
        $status = Status::all();
        foreach($status as $item)
        {
            $result[$item->id] = $item->name_;
        }
        return $result;
    }
}
