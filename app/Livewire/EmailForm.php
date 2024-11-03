<?php

namespace App\Livewire;

use App\Models\Email;
use Livewire\Attributes\Validate;
use Livewire\Component;

class EmailForm extends Component
{

    #[Validate('required|email|max:100|min:10')]
    public $email;

    public function save(){
        $data = $this->validate();
        Email::create($data);
        session()->flash('message', 'Thank you for join us 🎉');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.email-form');
    }
}
