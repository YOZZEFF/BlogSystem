<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;


    protected $fillable=[
        'title','content','user_id','views'
    ];

    function get_blogs(){
        // return $this->belongsTo(Instructor::class, 'instructor_id', 'id');
        return $this->belongsTo(User::class,'user_id','id')->get();
    }
    
}
