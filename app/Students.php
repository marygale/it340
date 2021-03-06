<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Students extends Model
{
    protected $table = "students";
    protected $primaryKey = "students";
    protected $fillable = [
        'seat_number',
        'student_name',
        'department',
        'course',
        'status',
        'year',
        'pos_x',
        'pos_y',
        'room'
    ];

    public function _room(){
        return $this->hasMany('App\Room', 'room', 'room');
    }

    public function _schedule()
    {
        return $this->belongsToMany(Schedule::class, 'student_schedule', 'student', 'schedule')
            ->withPivot('status')
            ->withTimestamps();
    }
}
