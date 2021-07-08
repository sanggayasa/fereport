<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
//use APP\Models\Member;
//use APP\Models\User;

class Createoffice extends Component
{
    public $body;
    public function render()
    {
        //$this->members = User::orderBy('created_at', 'DESC')->get();
        return view('livewire.create');
    }

    public function createpost()
    {
        Post::create([
            'body' => $this->body
        ]);
    }
}
