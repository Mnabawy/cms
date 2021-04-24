<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    public $imagePath = "/images/";

    use SoftDeletes;

    protected $datas = ['deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'path'
    ];


    // the reverse of the [1-1] relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //  the reverse for [1-M] relationship
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function getTitleAttribute($value)
    {
        return ucfirst($value);
    }

    public function getPathAttribute($value){
        return $this->imagePath . $value;
    }
}
