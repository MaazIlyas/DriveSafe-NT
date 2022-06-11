<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'license_no',
        'exp_in_years',
        'contact_num',
        'car_type',
        'language',
        'bio'
    ];

    //Making relation one to many
    public function ReviewData()
    {
        return $this->hasMany('App\Models\Review','instructor_id');
    }


}
