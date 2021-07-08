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

   
}
