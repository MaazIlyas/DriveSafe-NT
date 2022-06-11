<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'rating',
        'review',
        'instructor_id',
        'user_id'
    ];

    public function UserData()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
