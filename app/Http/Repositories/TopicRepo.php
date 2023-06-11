<?php

namespace App\Http\Repositories;

use App\Models\Topic;
use Illuminate\Contracts\Database\Eloquent\Builder;

class TopicRepo extends BaseRepo
{
    public function __construct(Topic $topic)
    {
        parent::__construct($topic);
    }

    public function getWithLangId($lang_id)
    {
        $topics = Topic::withWhereHas('topicLangs',function(Builder $query) use ($lang_id){
                    $query->where('lang_id',$lang_id);
                })->get();

        return $topics;
    }
}
