<?php

//Creating accessors and mutators

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
        'bio',
        'school_id'
    ];

    //Making relation one to many
    public function ReviewData()
    {
        return $this->hasMany('App\Models\Review','instructor_id');
    }

    //Making relation to get data
    public function SchoolData()
    {
        return $this->belongsTo('App\Models\Review','school_id');
    }

    public function ShowWithPagination($count)
    {
        //caching for an hour (added functionality to delete the cache if a new instructor is added, editted or deleted)
        // for manual clearing use command: php artisan config:clear
        return cache()->remember('instructors-page-'.request('page', 1), 60*60*24, function() {
            return Instructor::paginate($count);
        });
        
    }
}
