<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $guared = array('id');
    protected $fillable = ['id','title','body','image'];
    
    public static $rules = array(
        'title' => 'required',
        'body' => 'required'
        );
}
