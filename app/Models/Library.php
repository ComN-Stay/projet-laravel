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
        return $this->belongsTo(Artist::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }
}
