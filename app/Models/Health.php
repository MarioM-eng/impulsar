<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function scopeName($query, $data) {

        if ($data) {
            return $query->where('name','like',"$data%");
        }
        return null;
    }

    public function security()
    {
        return $this->hasMany(Security::class);
    }
}
