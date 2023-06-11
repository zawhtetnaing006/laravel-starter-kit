<?php

namespace App\Http\Livewire\Admin\Topic;

use Livewire\Component;

class Row extends Component
{
    public $topic;
    public $index;

    public function render()
    {
        return view('livewire.admin.topic.row');
    }
}
