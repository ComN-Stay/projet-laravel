<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = "gender";

    public function libraries()
    {
        return $this->hasMany(Gender::class, 'gender_id');
    }
}
