<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'picture', 'price',
    ];

    // ORM
    public function subscriptions()
    {
        return $this->belongsToMany(User::class, 'subscriptions');
    }
}
