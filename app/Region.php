<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'country', 'state', 'municipality', 'suburb', 'postalcode'
    ];


     /**
     * Get the crd for the user.
     */
    public function user()
    {
        return $this->hasMany('App\User','region_id');
    }
}
