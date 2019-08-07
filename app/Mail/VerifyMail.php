<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $company;
		public $mail_name;
    public $mail_address;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $company)
    {
      $this->user = $user;
      $this->company = $company;
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
      return $this->subject('Welcome To Pæy - '.$this->company->name)
        ->from($this->mail_address, $this->mail_name)
        ->cc($this->company->email, $this->company->name)
				->cc('paey.aeternity@gmail.com', 'Pæy æternity')
				->view('emails.verifymail');
    }
}
