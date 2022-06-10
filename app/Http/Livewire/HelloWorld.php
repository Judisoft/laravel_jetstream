<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Joe';
    public $loud = false;
    public $greeting = ['hello'];

    public function render()
    {

        return view('livewire.hello-world');
    }
}
