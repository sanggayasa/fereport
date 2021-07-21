<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactCreate extends Component
{
    public $name,
        $kelas,
        $phone;

    public function render()
    {
        return view('livewire.contact-create');
    }

    public function store()
    {

        $this->validate([
            'name' => 'required|min:5',
            'kelas' => 'required|min:5',
            'phone' => 'required|max:15'
        ]);

        $contacts = Contact::create([
            'name' => $this->name,
            'kelas' => $this->kelas,
            'phone' => $this->phone
        ]);
        $this->resetInput();

        $this->emit('contactStored', $contacts);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->phone = null;
    }
}
