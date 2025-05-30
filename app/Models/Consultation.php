<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reminders() {
        return $this->hasMany(Reminder::class);
    }
}
