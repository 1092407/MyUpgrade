<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User; //non so se serve

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    private $user; //messo io per mandare mail una volta che si registra

    /**
     * Create a new message instance.
     *
     * @return void

     */
     //ora lo modifico per passargli $user al costruttore
    public function __construct(User $user)
    {
     $this->user= $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
     // php artisan make:mail RegistrationMail --markdown=emails.registration.mail  comando per la creazione markdown

    public function build()
    {
        return $this->subject("welcome")->markdown('emails.registration.mail')->with('user',$this->user);

    }
}
