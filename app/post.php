<?php

namespace sisCRM;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //protected $table = 'posts';$

	protected $fillable = ['title', 'description','url'];

}