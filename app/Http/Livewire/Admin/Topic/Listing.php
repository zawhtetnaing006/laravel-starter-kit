<?php

namespace App\Http\Livewire\Admin\Topic;

use Livewire\Component;
use App\Http\Repositories\TopicRepo;

class Listing extends Component
{

    public $topics = "this is topic list";   

    public function mount(TopicRepo $topic_repo)
    {
        $this->topics = $topic_repo->getWithLangId(1);
        \Log::info($this->topics);
    } 
    
    public function render()
    {

        return view('livewire.admin.topic.listing');
    }
}
