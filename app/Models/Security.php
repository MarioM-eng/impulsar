<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Security extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function health()
    {
        return $this->belongsTo(Health::class);
    }
    public function pension()
    {
        return $this->belongsTo(Pension::class);
    }
    public function occupationalRiskManager()
    {
        return $this->belongsTo(OccupationalRiskManager::class);
    }
}
