<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $mail_name;
    public $mail_address;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
      $this->contact = $request;
      $this->mail_name = env('MAIL_FROM_NAME');
      $this->mail_address = env('MAIL_FROM_ADDRESS');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      return $this->subject('Pæy Contact form - '.$this->contact->subject)
                  ->from($this->mail_address, $this->mail_name)
                  ->to('paey.aeternity@gmail.com', 'Contact Pæy')
                  ->replyTo($this->contact->email, $this->contact->name)
                  ->view('emails.contactmail');
    }
}
