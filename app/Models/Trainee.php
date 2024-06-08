<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function caseSolveDetails()
    {
        return $this->hasMany(CaseSolveDetail::class);
    }
}