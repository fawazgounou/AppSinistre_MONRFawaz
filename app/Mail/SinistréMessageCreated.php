<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SinistréMessageCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $age;
    public $profession;
    public $nomprenom;
    public $protection;
    public $photo;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($age, $profession, $nomprenom, $protection,$photo)
    {
        $this -> age = $age;
        $this -> profession = $profession;
        $this -> nomprenom = $nomprenom;
        $this -> protection = $protection;
        $this -> photo = $photo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.created');
    }
}
