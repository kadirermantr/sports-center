<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    protected $table = 'gyms';
    protected $fillable = ['id', 'name', 'city_id', 'district_id', 'photo', 'capacity', 'work_days', 'work_hours', 'created_by'];

    public function get_City()
    {
        return $this->hasOne('App\Models\City','id','city_id');
    }

    public function get_District()
    {
        return $this->hasOne('App\Models\District','id','district_id');
    }
}
