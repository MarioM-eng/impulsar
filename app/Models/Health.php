<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function security()
    {
        return $this->hasMany(Security::class);
    }
}
