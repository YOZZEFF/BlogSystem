<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'content', 'views', 'author_id'

    ];
    protected $read_only = ['title', 'id']; 

    public function getauthor(){

        return $this->belongsTo(Author::class,'author_id','id');

    }
}
