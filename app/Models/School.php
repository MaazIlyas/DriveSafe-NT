<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'street_address',
        'city',
        'state',
        'post_code'
    ];

        //Making relation one to many
        public function InstructorData()
        {
            return $this->hasMany('App\Models\Review','school_id');
        }
}
