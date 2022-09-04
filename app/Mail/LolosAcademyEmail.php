<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LolosAcademyEmail extends Mailable
{

    public $name;

    // public $type;

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
        $message .= '<p>After assessing all of our ISE Academy 2022 submissions, we sent this mail to congratulate you on passing the selection test. For the next phase, you are required to pay for ISE Academy commitment fee.
        </p>';
        $message .= "<p>The commitment fee for ISE Academy is a type of payment that represents the participant's commitment to participating in the ISE Academy 2022 event. If the team is able to participate in all events as a full team and successfully completes the mini project assignments, the commitment fee will be fully refunded to the team.
        </p>";
        $message .= "<p>For a guide on paying commitment fee, you can check the tutorial here <a href='https://ise-its.com/GuideCommitmentFee' target='_blank'>ise-its.com/GuideCommitmentFee</a>. Please note that commitment fee is mandatory for all continuing teams, so make sure you pay the commitment fee by September 6, 2022.
        </p>";
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
