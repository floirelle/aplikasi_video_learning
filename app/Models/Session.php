<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $primaryKey = 'session_id';

    protected $fillable = [
        'course_code',
        'session_name',
        'videos',
    ];

    public function course()
    {
        return $this->belongsTo('App\Models\Course', 'course_code');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video', 'session_id');
    }
}
