<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopicLang extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['title','description'];

    protected $appends = ['short_description'];

    public function Topic()
    {
        return $this->belongsTo(Topic::class);
    }

    protected function getShortDescriptionAttribute()
    {
        $description = $this->description;
        $maxWords = 15;
        $words = explode(' ', $description);
        $limitedDescription = implode(' ', array_slice($words, 0, $maxWords));
        $isTruncated = count($words) > $maxWords;
        return $limitedDescription.($isTruncated ? '...' : '');
    }
}
