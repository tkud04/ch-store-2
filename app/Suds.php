<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suds extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id','used'
    ];
}
