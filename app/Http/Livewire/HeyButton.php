<?php

namespace App\Http\Livewire;

use App\Mail\MessageMailable;
use App\Models\Message;
use App\Rules\AlphaNumSpacesRule;
use App\Rules\AlphaSpacesRule;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class HeyButton extends Component
{

    public $email;
    public $name;
    public $phone;
    public $body;
    public $user_ip;

    public $sended = false;

    protected function rules() {
        return [
            'email' => 'required|email',
            'name' => ['required', new AlphaSpacesRule()],
            'phone' => 'required|numeric',
            'body' => ['required', new AlphaNumSpacesRule()]
        ];
    }

    protected $messages = [
        'email.required' => 'El correo electrónico es requerido.',
        'name.required' => 'El nombre es requerido.',
        'phone.required' => 'El número telefónico es requerido.',
        'phone.numeric' => 'Solo se aceptan números.',
        'body.required' => 'El mensaje es obligatorio.'
    ];

    public function submit() {

        $this->email = trim($this->email);
        $this->name = trim($this->name);
        $this->phone = trim($this->phone);
        $this->body = trim($this->body);
        $data = $this->validate();

        try {

            $data['ip_address'] = Request::ip();
            $message = Message::create($data);
            $mailable = new MessageMailable($message);
            Mail::to(env('MAIL_ADMIN'))->send($mailable);
            $this->sended = true;
            $this->reset('email', 'name', 'phone', 'body');
            
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    public function render()
    {
        return view('livewire.hey-button');
    }
}
