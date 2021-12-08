<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'image',
        'address',
        'social',
        'about',
        'activate',
        'team_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function team()
    {
        return $this->belongsTo('App\Models\Team','team_code');
    }
    public function articles()
    {
        return $this->hasMany('App\Models\Article','user_id');
    }
    public function boards()
    {
        return $this->hasMany('App\Models\Board','user_id');
    }
    public function chats()
    {
        return $this->hasMany('App\Models\Chat','user_id');
    }
    public function comments()
    {
        return $this->hasMany('App\Models\Comment','user_id');
    }
    public function contacts()
    {
        return $this->hasMany('App\Models\Contact','user_id');
    }
    public function courses()
    {
        return $this->hasMany('App\Models\Course','user_id');
    }
    public function events()
    {
        return $this->hasMany('App\Models\Event','user_id');
    }
    public function files()
    {
        return $this->hasMany('App\Models\FilesArea','user_id');
    }
    public function meatings()
    {
        return $this->hasMany('App\Models\Meating','user_id');
    }
    public function notes()
    {
        return $this->hasMany('App\Models\Note','user_id');
    }
    public function posts()
    {
        return $this->hasMany('App\Models\Post','user_id');
    }

    public function programmings()
    {
        return $this->hasMany('App\Models\Programming','user_id');
    }
    public function quotes()
    {
        return $this->hasMany('App\Models\Quote','user_id');
    }
    public function roadmaps()
    {
        return $this->hasMany('App\Models\RoadMap','user_id');
    }
    public function rules()
    {
        return $this->hasOne('App\Models\Rule','user_id');
    }
    public function tasks()
    {
        return $this->hasMany('App\Models\Task','user_id');
    }
}
