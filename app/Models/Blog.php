<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['head', 'content', 'category', 'tags', 'thumbnail', 'comment', 'created_by', 'created_at'];

    public function user() {
        return $this->hasMany('App\Models\User', 'id', 'created_by');
    }
}
