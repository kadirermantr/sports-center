<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Application extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'applications';
    protected $fillable = ['id', 'name', 'city_id', 'district_id', 'photo', 'capacity', 'work_days', 'work_hours', 'status', 'created_by'];

    public function get_City()
    {
        return $this->hasOne('App\Models\City','id','city_id');
    }

    public function get_District()
    {
        return $this->hasOne('App\Models\District','id','district_id');
    }

    public function user()
    {
        return $this->hasMany('App\Models\User','id','created_by');
    }
}
