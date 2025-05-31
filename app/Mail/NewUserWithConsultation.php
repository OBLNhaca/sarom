<?php

namespace App\Mail;

use App\Models\User;
use App\Models\Consultation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class NewUserWithConsultation extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $consultation;

    /**
     * Create a new message instance.
     */
    public function __construct(User $user, Consultation $consultation)
    {
        $this->user = $user;
        $this->consultation = $consultation;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Confirmação de Marcação e Acesso ao Sistema',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new_user_consultation',
        );
    }

    /**
     * Get the attachments for the message.
     */
    public function attachments(): array
    {
        return [];
    }
}
