<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UnikTidakLolosAcademyEmail extends Mailable
{
    public $name;

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
        $message .= '<p>After assessing all of our ISE Academy 2022 submissions, we are very sorry that your team did not pass the selection test.
        </p>';
        $message .= '<p>The reasoning behind it is not because the idea wasn`t brilliant; It`s because the business idea your team proposed is already an early-stage startup because of its traction phase, and ISE Academy is prioritizing a business idea from the team that starts from scratch. Still, we believe your business will succeed. Keep pushing, and don`t forget to join another ISE! event. Good luck!!
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
