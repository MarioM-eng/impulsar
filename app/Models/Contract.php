<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function bussiness()
    {
        return $this->belongsTo(Business::class);
    }
    public function contratcType()
    {
        return $this->belongsTo(ContractType::class);
    }
}
