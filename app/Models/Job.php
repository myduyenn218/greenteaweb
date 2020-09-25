<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'jobs';

    protected $fillable = ['id', 'job_title', 'description, jobtype_id'];

    public function  jobtype()
    {
        return $this->belongsTo(JobType::class, 'jobtype_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_job');
    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
