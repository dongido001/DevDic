<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrameworkTutorial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tutorial_link', 'tutorial_article',
    ];
}