<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $primaryKey = 'course_code';
    protected $keyType = 'string';

    protected $fillable = [
        'course_id',
        'course_code',
        'course_name',
        'course_description',
    ];

    public function sessions()
    {
        return $this->hasMany('App\Models\Session', 'course_code');
    }
}
