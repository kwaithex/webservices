<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sortname', 'name', 'phonecode'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get all the states country have.
     */
    public function cities()
    {
        return $this->hasManyThrough('App\City', 'App\State');
    }
}