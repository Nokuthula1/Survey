<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'survey';
    protected $fillable = [
        'name','surname','phone','age','food','eat','movies','tv','radio'
    ];
}
