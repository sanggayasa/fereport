<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactUpdate extends Component
{
    public $name,
        $kelas,
        $phone,
        $contactId;
    protected $listeners = ['getContact' => 'showContact'];

    public function render()
    {
        return view('livewire.contact-update');
    }

    public function showContact($contact)
    {
        $this->name = $contact['name'];
        $this->kelas = $contact['kelas'];
        $this->phone = $contact['phone'];
        $this->contactId = $contact['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|min:5',
            'kelas' => 'required|min:5',
            'phone' => 'required|max:15'
        ]);

        if ($this->contactId) {
            $contacts = Contact::find($this->contactId);
            $contacts->update([
                'name' => $this->name,
                'kelas' => $this->kelas,
                'phone' => $this->phone
            ]);
            $this->resetInput();
        }

        $this->emit('contactUpdate', $contacts);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->kelas = null;
        $this->phone = null;
    }
}
