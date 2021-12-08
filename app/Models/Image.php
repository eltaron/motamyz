<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'post_id',
        'event_id',
        'image',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\User','post_id');
    }

    public function article()
    {
        return $this->belongsTo('App\Models\User','article_id');
    }

    public function event()
    {
        return $this->belongsTo('App\Models\User','event_id');
    }
}
