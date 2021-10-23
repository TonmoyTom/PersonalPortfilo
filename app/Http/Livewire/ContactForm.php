<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;
use Illuminate\Http\Request;
use Mail;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $comment;
    public $success;

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
    }
    public function store(Request $request)
    {
        $this->validate([
            'name' => 'required|min:5',
            'email' => 'required|email:rfc,dns'
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment
        ]);
        $this->resetInput();

        $this->success = 'Thank you for reaching out to us!';;
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
