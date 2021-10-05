<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InqueryEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The details instance.
     *
     * @var \App\Models\Order
     */
    public $details;

 /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
          return $this->subject('Product Inquery from crafty')
            ->view('pages.mail.index')
            ->from('inquery@crafty.com', 'Crafty Inquery');
    }
}