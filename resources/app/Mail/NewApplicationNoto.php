<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewApplicationNoto extends Mailable{
    use Queueable, SerializesModels;
    public $Application;
    public function __construct($Application){
        $this->Application = $Application;
    }
    public function build(){
        return $this->markdown('mails/company/NewApplicationNoto')->from([
            'address' => 'noreply@jobcenter.com',
            'name' => 'Job Center'
        ]);
    }
}
