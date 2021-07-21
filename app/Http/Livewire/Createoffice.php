<?php

namespace App\Http\Livewire;

use App\Models\office;
use Livewire\Component;
//use APP\Models\Member;
//use APP\Models\User;

class Createoffice extends Component
{

    public $office;

    public function render()
    {
        //$this->members = User::orderBy('created_at', 'DESC')->get();
        return view('livewire.create');
    }

    public function store()
    {
        //dd($this->office);
        //return office::insert('insert into m_office (id_office, office) values (?, ?)', [1, 'tess']);
        //office::create([
        //     'office' => $this->office
        // ]);
        office::create([
            //''=> $request->name,
            'office' => $this->office
        ]);
    }
}
