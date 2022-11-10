<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OccupationalRiskManager extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function security()
    {
        return $this->hasMany(Security::class);
    }

    public function occupationalRiskManagerType()
    {
        return $this->belongsTo(ORMType::class);
    }

    public function occupationalRiskManagerState()
    {
        return $this->belongsTo(ORMState::class);
    }
}
