<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractType extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
}
