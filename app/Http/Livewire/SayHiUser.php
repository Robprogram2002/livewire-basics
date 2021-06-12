<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SayHiUser extends Component
{
    public $user;
    public $name = 'replace the name here...';

    public function mount($user) {
        
        $this->user = $user;
    }


    public function render()
    {
        return view('livewire.say-hi-user');
    }
}
