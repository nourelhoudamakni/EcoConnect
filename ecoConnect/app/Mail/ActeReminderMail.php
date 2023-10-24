<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\ActeVolontaire;
class ActeReminderMail extends Mailable
{
    use Queueable, SerializesModels;
    protected $acte;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ActeVolontaire $acte)
    {
        $this->acte = $acte;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Acte Reminder Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.acte-reminder')
            ->with([
                'acte' => $this->acte,
            ])
            ->subject('Reminder: Your Upcoming Acte Volontaire');
    }
}


