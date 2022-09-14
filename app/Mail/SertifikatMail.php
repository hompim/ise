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
        $message = '<p><b>Greetings, ' . $this->name . '</b></p>';
        $message .= '<p>Thank you for your enthusiasm partaking in IS Class ISE! 2022. Hopefully, our IS Class ISE! 2022 can give some insights and be helpful for the future.</p>';
        $message .= '<p>Through this email, here we provide link certificate for you as a participant in the IS Class ISE! 2022.</p>';
        $message .= '<a href=' . $this->sertif . ' target=_blank>Link Google Drive for certificate</a><br>';
        $message .= '<p>If you have any inquiries, please contact us via WhatsApp Center (0851-6285-2050)</p>';
        $message .= '<p>For more information, visit our social media at <a href="beacons.ai/ise2022">beacons.ai/ise2022</a></p>';
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        $this->subject('Certificate of IS Class ISE! 2022')
            ->from('admin@ise-its.com', config('app.name'))
            ->markdown(
                'vendor.mail.text.message',
                [
                    'slot' => $message
                ]
                );
        return $this;
    }
}
