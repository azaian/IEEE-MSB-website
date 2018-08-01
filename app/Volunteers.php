<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Volunteers extends Model
{
    protected $table = "volunteers";
    protected $fillable = [
        'name',
        'position',
        'image',
        'join_date',
        'order',
        'username_id',
    ];

    public function setUsernameIdAttribute(){

        $this->attributes['username_id']=Auth::user()->id;

    }
}
