<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SertifikatMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name;
    protected $sertif;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $sertif)
    {
        $this->name = $name;
        $this->sertif = $sertif;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = '<p><b>Hi ' . $this->name . '</b></p>';
        $message .= '<p>Thank you for your enthusiasm in participating Kick Off Webinar ISE! 2022.Hopefully, Kick Off Webinar ISE! 2022 this time can add insight and be helpful for the future.</p>';
        $message .= '<p>Through this email, here we provide link certificate for you as a participant in the Kick Off Webinar ISE! 2022.</p>';
        $message .= '<a href=' . $this->sertif . ' target=_blank>Link Google Drive for certificate</a><br>';
        $message .= '<p>For more information, visit our social media at :<br/>
Instagram : @is_expo<br/>
Twitter : @is_expo<br/>
Whatsapp Center :<a href="https://wa.me/6285162852050" target="_blank"> 0851-6285-2050</a><br/>
</p>
';
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        $this->subject('Certificate of Kick Off Webinar ISE! 2022!')
            ->from('admin@ise-its.com', config('app.name'))
            ->markdown(
                'vendor.mail.text.message',
                [
                    'slot' => $message
                ]
            )
            ->attach($this->sertif);

        return $this;
    }
}
