<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPasswordMail extends Mailable{
    use Queueable, SerializesModels;
    public $User;
    public function __construct($User){
        $this->User = $User;
    }
    public function build()
    {
        return $this->markdown('mails/ResetPasswordMail');
    }
}
