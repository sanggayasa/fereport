<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\office;


class Fereport extends Component
{
    public $c_office;
    public $isModal;
    public function __construct()
    {
        $this->office = new office();
    }
    public function render()
    {
        //$this->members = User::orderBy('created_at', 'DESC')->get('');
        $data = [
            'office' => $this->office->alldata(),
        ];
        //dd($data);
        return view('livewire.fereport', $data);
    }

    // public function create()
    // {
    //     $this->resetFields();
    //     $this->openModal();
    // }

    // public function resetFields()
    // {
    //     $this->c_office = '';
    // }

    // public function openModal()
    // {
    //     $this->isModal = true;
    // }

    // public function closeModal()
    // {
    //     $this->isModal = false;
    // }
}
