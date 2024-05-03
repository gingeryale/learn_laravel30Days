<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;
    // an employer has many jobs
    public function jobs(){
        return $this->hasMany(Job::class);
    }
    // an employer belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
