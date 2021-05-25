<?php

namespace App\Http\Livewire;

use Livewire\Component;
//use APP\Models\Member;
//use APP\Models\User;

class Members extends Component
{
    public function render()
    {
        //$this->members = User::orderBy('created_at', 'DESC')->get();
        return view('livewire.members');
    }
}
