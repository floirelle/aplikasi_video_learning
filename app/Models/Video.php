<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $primaryKey = 'video_id';

    protected $fillable = [
        'video_title',
        'session_name',
        'course_id',
        'class_code',
        'video_maker',
        'video_software_description',
        'video_file',
        
    ];


    public function session()
    {
        return $this->belongsTo('App\Models\Session', 'video_id');
    }
}
