<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Testimonial extends Model
{
    protected $fillable = ['name', 'job_title', 'project_type','comment'];

}
