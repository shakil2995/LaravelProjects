<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    // table name
    protected $table = 'posts';
    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\User');
    }

}
