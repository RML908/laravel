<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    use HasFactory;
}
