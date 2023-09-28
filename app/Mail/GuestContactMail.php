<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class GuestContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mailmsg;
    public $emailsender;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailmsg,$emailsender)
    {
        $this->mailmsg = $mailmsg;
        $this->emailsender = $emailsender;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->from($this->emailsender)
        return $this->from(env('MAIL_FROM_ADDRESS', $this->emailsender))
        ->subject("Mail From TGV Contact Page")
        ->view('emails.guest-email', ["mailmsg"=>$this->mailmsg]);
        //return $this->markdown('emails.guest-email');
    }
}
