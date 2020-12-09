<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    public function getUser() {
        return $this->hasOne('App\Models\User', 'user');
    }

    public function getAutoUpdateFunctionAttribute() {
        if ($this->is_auto_update == true) {
            $create = $this->created_at->format('Y-m-d');
            $today = date('Y-m-d');
            if (strtotime($today) > strtotime($create)) {
                $this->is_new = false;
                $this->is_trending = false;
                $this->save();
            }
        }
        return $this;
    }
}
