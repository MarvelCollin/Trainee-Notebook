<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpproject extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function bpprojectDetails()
    {
        return $this->hasMany(BpprojectDetail::class);
    }
}
