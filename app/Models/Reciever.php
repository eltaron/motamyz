<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reciever extends Model
{
    use HasFactory;
    protected $fillable = [
        'task_id',
        'task',
        'progress',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $appends = [
        'time_ago'
    ];

    public function getTimeAgoAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function task()
    {
        return $this->belongsTo('App\Models\Task','task_id');
    }
}
