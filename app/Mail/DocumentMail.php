<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DocumentMail extends Mailable
{
    use Queueable, SerializesModels;
    public $fisier;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($numefisier)
    {
        $this->fisier=$numefisier;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.document')->attach($this->fisier,['as' => 'document.pdf',
        'mime' => 'application/pdf',]);
    }
}
