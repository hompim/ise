<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Blastbcl extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = '<p><b>Hi, Metazen!</b></p>';
        $message .= '<p><b>Bionix College Level ISE! 2022 is back!🤩</b>
        </p>';
        $message .= "<p>Bionix College Level is an innovation competition for designing startup business plan ideas in the field of technology organized by Information Systems Department ITS for FREE. By participating in this event, you will get an e-certificate, knowledge, millions of Rupiah prizes, and many other benefits.
        </p>";
        $message .= "<p>What are you waiting for? Join us again in Bionix College Level!✨
        </p>";
        $message .= "<p>GUIDEBOOK 👇
        </p>";
        $message .= "<p><a href='http://ise-its.com/guidebook-college'>
        ise-its.com/guidebook-college
        </a></p>";
        $message .= "<p>SAVE THE DATE AND REGISTER YOUR TEAM❗❗</p>
        <p>📅<b> August 21 - September 21, 2022</b></p>";

        $message .= "<p><a href='https://ise-its.com/dashboard/peserta/bionix/register/college'>
        Register Now❗❗
        </a></p>";
        $message .= "<img src='https://ise-its.com/images/bionix/bcl-2.png' alt='poster-bcl'/>";
        $message .= "<p>If you have any questions, please contact us via WhatsApp Center <a href='https://wa.me/6285162852050'>(0851-6285-2050)</a></p>";
        $message .= "<p>For more information, visit our social media at <a href='https://beacons.ai/ise2022'>beacons.ai/ise2022</a></p>";
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        return $this->subject('Open Registration Bionix College Level ISE! 2022')->from('admin@ise-its.com', config('ISE 2022'))->markdown(
            'vendor.mail.text.message',
            [
                'slot' => $message
            ]
        );
    }
}
