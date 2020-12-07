<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    public function GetReporter() 
    {
        return $this->belongsTo('App\Models\User', 'user');
    }

    public function GetCategory() 
    {
        return $this->belongsTo('App\Models\category', 'category');
    }
}
