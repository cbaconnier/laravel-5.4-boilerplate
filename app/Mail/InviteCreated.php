<?php

namespace App\Mail;

use App\App\Models\Invite;
use Illuminate\Bus\Queueable;
use Illuminate\Container\Container;
use Illuminate\Contracts\Mail\Mailer as MailerContract;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Snowfire\Beautymail\Beautymail;

class InviteCreated extends Mailable
{
    use Queueable, SerializesModels;

    protected $invite;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Invite $invite)
    {
        $this->invite = $invite;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $invite = $this->invite;
        return $this
            ->subject('Register now')
            ->from('you@example.com')
            ->view('emails.invite' , compact('invite'))
            ;
    }

    /**
     * Send the message using the given mailer.
     *
     * @param  \Illuminate\Contracts\Mail\Mailer  $mailer
     * @return void
     */
    public function send(MailerContract $mailer)
    {
        Container::getInstance()->call([$this, 'build']);

        $beautymail = app()->make(Beautymail::class);

        $beautymail->send($this->buildView(), $this->buildViewData(), function ($message) {
            $this->buildFrom($message)
                ->buildRecipients($message)
                ->buildSubject($message)
                ->buildAttachments($message)
                ->runCallbacks($message);
        });
    }

}
