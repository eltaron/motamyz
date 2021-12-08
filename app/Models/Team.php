<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'team_name',
        'team_code',
        'logo',
        'color',
        'social',
        'youtube',
        'activate',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function users()
    {
        return $this->hasMany('App\Models\User','team_code');
    }
}
