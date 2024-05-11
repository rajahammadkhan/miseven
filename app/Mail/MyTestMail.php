<?php
  
namespace App\Mail;
  
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
  
class MyTestMail extends Mailable
{
    use Queueable, SerializesModels;
  
    public $contact;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Contact Us Massage';
        $from = $this->contact['email'];
        
        return $this->view('contact_email')
                    ->from($from)
                    ->subject($subject)
                    ->with([ 'contact' => $this->contact ]);
    }
}