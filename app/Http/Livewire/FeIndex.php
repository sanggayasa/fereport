<?php

namespace App\Http\Livewire;

use App\Models\Fereport;
use Livewire\Component;
use Livewire\WithPagination;

class FeIndex extends Component
{
    use WithPagination;
    public $statusUpdate = false;
    public $paginate = 5;
    public $search;
    protected $listeners = ['fereportStored' => 'handleStored', 'fereportUpdate' => 'handleUpdate'];
    protected $updateQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        return view('livewire.fe-index', [
            'fereports' => $this->search === null ?
                Fereport::latest()->paginate($this->paginate) :
                Fereport::where('ticket_number', 'like', '%' . $this->search . '%')
                ->orWhere('id_customer', 'like', '%' . $this->search . '%')->paginate($this->paginate)

        ]);
    }

    public function getFereport($id)
    {
        $this->statusUpdate = true;
        $Fereport = Fereport::find($id);
        $this->emit('getFereport', $Fereport);
    }

    public function destroy($id)
    {
        if ($id) {
            $data = Fereport::find($id);
            $data->delete();
            session()->flash('message', 'FE Berhasil DiHapus!');
        }
    }

    public function handleStored($Fereports)
    {
        session()->flash('message', 'FE ' . $Fereports['ticket_number'] . ' Berhasil Disimpan!');
    }

    public function handleUpdate($Fereports)
    {
        // $this->handleStored($Fereports);
        session()->flash('message', 'FE ' . $Fereports['ticket_number'] . ' Berhasil Diupdate!');
    }
}
