<?php

namespace App\Http\Livewire;

use App\Models\Fereport;
use Livewire\Component;

class FeUpdate extends Component
{
    public $ticket_number,
        $tanggal_ticket,
        $id_customer,
        $fereportId;
    protected $listeners = ['getFereport' => 'showFereport'];

    public function render()
    {
        return view('livewire.fe-update');
    }

    public function showFereport($fereport)
    {
        $this->ticket_number = $fereport['ticket_number'];
        $this->tanggal_ticket = $fereport['tanggal_ticket'];
        $this->id_customer = $fereport['id_customer'];
        $this->fereportId = $fereport['id'];
    }

    public function update()
    {
        $this->validate([
            'ticket_number' => 'required|min:5',
            'tanggal_ticket' => 'required|min:5',
            'id_customer' => 'required|max:15'
        ]);

        if ($this->fereportId) {
            $fereports = Fereport::find($this->fereportId);
            $fereports->update([
                'ticket_number' => $this->ticket_number,
                'tanggal_ticket' => $this->tanggal_ticket,
                'id_customer' => $this->id_customer
            ]);
            $this->resetInput();
        }

        $this->emit('fereportUpdate', $fereports);
    }

    private function resetInput()
    {
        $this->ticket_number = null;
        $this->tanggal_ticket = null;
        $this->id_customer = null;
    }
}
