<?php

namespace App\Http\Livewire;

use App\Models\Fereport;
use Livewire\Component;

class FeCreate extends Component
{
    public $ticket_number,
        $tanggal_ticket,
        $id_customer;

    public function render()
    {
        return view('livewire.fe-create');
    }

    public function store()
    {

        $this->validate([
            'ticket_number' => 'required|min:5',
            'tanggal_ticket' => 'required|min:5',
            'id_customer' => 'required|max:15'
        ]);

        $fereports = Fereport::create([
            'ticket_number' => $this->ticket_number,
            'tanggal_ticket' => $this->tanggal_ticket,
            'id_customer' => $this->id_customer
        ]);
        $this->resetInput();

        $this->emit('fereportStored', $fereports);
    }

    private function resetInput()
    {
        $this->ticket_number = null;
        $this->id_customer = null;
    }
}
