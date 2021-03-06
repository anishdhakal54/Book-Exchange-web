<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Exchange extends Model
{
    use Notifiable,HasApiTokens;
    protected $fillable = [

        'book_wanted', 'book_offered', 'requested_by', 'requested_to', 'status'
    ];
    public function wantedId()
    {
        return $this->belongsTo('App\Book','book_wanted');
    }

    public function offeredId()
    {
        return $this->belongsTo('App\Book','book_offered');
    }

    public function requestedTo()
    {
        return $this->belongsTo('App\User','requested_to');
    }

    public function requestedBy()
    {
        return $this->belongsTo('App\User','requested_by');
    }

    protected $hidden = [
        'password', 'remember_token',
    ];



//    public function reviews()
//    {
//        return $this->hasMany('App\Book','book_wanted')->where('publish',1);
//    }
//
//    public function dispatches()
//    {
//        return $this->hasMany('App\User','requested_id')->where('publish',1);
//    }
}
