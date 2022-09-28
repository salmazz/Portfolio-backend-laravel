<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    protected $fillable = ['name', 'job_title', 'facebook_link','linkedin', 'image'];

}
