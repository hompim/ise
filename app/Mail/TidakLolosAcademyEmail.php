<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TidakLolosAcademyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        $this->name = $name;
        // $this->type = $type;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = '<p><b>Dear ' . $this->name . ',</b></p>';
        $message .= '<p>After assessing all of our ISE Academy 2022 submissions, we are very sorry to inform you that your team did not pass the selection test.  It is unfortunate, but we believe that better opportunities will come, so keep pushing!! Thankyou for taking part in ISE Academy 2022 and don`t forget to join other ISE! events and competitions. Good luck!!
        </p>';
        $message .= "<p>If you have any questions, please contact us via WhatsApp Center <a href='https://wa.me/6285162852050'>(0851-6285-2050)</a></p>";
        $message .= "<p>For more information, visit our social media at <a href='https://beacons.ai/ise2022'>beacons.ai/ise2022</a></p>";
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        return $this->subject('ISE Academy 2022 Selection Test Result')->from('admin@ise-its.com', config('app.name'))->markdown(
            'vendor.mail.text.message',
            [
                'slot' => $message
            ]
        );
    }
}
