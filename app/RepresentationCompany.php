<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RepresentationCompany extends Model
{
    //
    protected $table = 'representation_company';

    protected $fillable = [
        'id',
        'representation_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'password',
        'position',
        'company_id'

    ];

    public function retrieveRepId()
    {

        return Auth::user()->user_id;
    }

    public function createTopic()
    {
        
    }

    public function getTopicId()
    {
        $repId = Auth::user()->user_id;
        return DB::table('topic')->where('representation_id', '=', $repId)->pluck('topic_id');
    }

    protected $hidden = [
        'password'
    ];

    public function company()
    {

        return $this->belongsTo('App\Company');

    }

    public function topic()
    {

        return $this->hasMany('App\Topic');

    }
}
