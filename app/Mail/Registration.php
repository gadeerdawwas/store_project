<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Registration extends Mailable
{
    public $data;
    public $emails;
    public $sub;
    public $view;

    public function __construct($data,$emails,$view = "mail.success_registration",$sub = "New Order Created Successfully")
    {
        $this->data = $data;
        $this->emails = $emails;
        $this->sub = $sub;
        $this->view = $view;
    }

    public function build()
    {
        $data = $this->data;
        return $this->subject($this->sub)
            ->cc($this->emails)
            ->from('info@akotime.com','AKO Time')
            ->view($this->view,compact("data"));
    }
}
