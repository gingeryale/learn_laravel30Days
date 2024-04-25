<?php

namespace App\Models;

use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model{

    use HasFactory;

    protected $table = 'job_listings';
    // protected $gaurded = [];

    protected $fillable = [
        'employer_id',
        'title', 
        'salary',
    ];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
        // foreign Pivot Key to overwrite default JOB table convention
    }
}