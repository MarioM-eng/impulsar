<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ORMType extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function occupationalRiskManager()
    {
        return $this->hasMany(OccupationalRiskManager::class);
    }
}
