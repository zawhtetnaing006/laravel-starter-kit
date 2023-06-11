<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $fillable = ['title','description'];

    public function topicLangs()
    {
        return $this->hasMany(TopicLang::class);
    }

    public function createdBy(){
        return $this->belongsTo(User::class,'created_by','id');
    }
}
