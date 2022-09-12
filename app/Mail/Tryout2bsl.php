<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Tryout2bsl extends Mailable
{

    protected $name;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = '<p><b>Dear ' . $this->name . ',</b></p>';
        $message .= '<p>Through this email, we inform you that the Bionix Student Level Competition 2nd Tryout has already begun and the schedule is today from 09:00 in the morning to 22:00 at night!
        </p>';
        $message .= "<p>For accessing the tryout 2, you can click and follow the link below,
        </p>";
        $message .= "<p><a href='https://www.competition.ise-its.com/'>
        competition.ise-its.com
        </a></p>";
        $message .= "<p>Below are some links to a guidance regarding access to the 2nd tryout,
        </p>";
        $message .= "<p><a href='https://drive.google.com/file/d/1OqaKMaVQlLS0xPCh1Mpe5Vi5VxTGJEW1/view?usp=sharing'>Guide Book Student</a></p>
        <p><a href='https://scribehow.com/shared/Bionix_Competition_Tryout__V_ik-HpLRK-vGUfpb2YGRA'>Panduan penggunaan website</a></p>";
        $message .= "<p>If you have any questions, please contact us via WhatsApp Center <a href='https://wa.me/6285162852050'>(0851-6285-2050)</a></p>";
        $message .= "<p>For more information, visit our social media at <a href='https://beacons.ai/ise2022'>beacons.ai/ise2022</a></p>";
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        return $this->subject('Tryout 2 Bionix Student Level')->from('admin@ise-its.com', config('app.name'))->markdown(
            'vendor.mail.text.message',
            [
                'slot' => $message
            ]
        );
    }
}
