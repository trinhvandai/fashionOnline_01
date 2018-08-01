<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    public $timestamp=true;
    public function Object()
    {
    	return $this->morphTo();
    }
}
