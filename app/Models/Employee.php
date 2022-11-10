<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function contract()
    {
        return $this->hasOne(Contract::class);
    }
    public function bankAccount()
    {
        return $this->hasOne(BankAcount::class);
    }
    public function security()
    {
        return $this->hasOne(Security::class);
    }
}
