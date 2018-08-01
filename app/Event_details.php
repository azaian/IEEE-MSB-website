<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class event_details extends Model
{
    protected $table='event_details';
    protected $fillable=[
        'event_name',
        'event_desc',
        'event_banner',
        'event_image',
        'order',
        'gallery_id',
        'date',
        'username_id',
    ];

    public function setUsernameIdAttribute(){

        $this->attributes['username_id']=Auth::user()->id;

    }
}
