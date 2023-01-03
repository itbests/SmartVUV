<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $table = 'module';
    public $timestamps = false;

    static public function comboBox()
    {
        $module = Module::all();
        foreach($module as $item)
        {
            $result[$item->id] = $item->name_;
        }
        return $result;
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }
}
