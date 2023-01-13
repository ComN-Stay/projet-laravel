<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $table = "library";

    public function artist()
    {
        return $this->hasOne(Artist::class);
    }

    public function gender()
    {
        return $this->hasOne(Gender::class);
    }
}
