<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    pulic function profileImage() {
        return '/storage/' . ($this->image) ? $this->image : 'storage/profile/7g2WRcvFT3J5EX4WaP3LWIhhDJMuutqFLrOz19uI.png'
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
