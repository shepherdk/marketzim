<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Table Name
    protected $table = 'articles';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    //mass assignment using fillable, use guarded for single assignments
    protected $fillable = ['title', 'type', 'category', 'description', 'price', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
