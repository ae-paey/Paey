<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ProfileMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
	  public $mail_name;
    public $mail_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
      $this->user = $user;
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
      return $this->subject('Welcome To Pæy - '.$this->user->name)
				->from($this->mail_address, $this->mail_name)
				->view('emails.profilemail');
    }
}
