<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class IconSeleksiEmail extends Mailable
{
    public $name;

    public $type;

    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $type = null)
    {
        $this->name = $name;
        $this->type = $type;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->type == 'Seleksi') {
            $message = '<p><b>Dear ' . $this->name . '</b></p>';
            $message .= '<p>Congratulations, you passed the administration selection of Data Science Academy ISE! 2022. For the next step, you can start working on the selection test by downloading questions and collecting answers through the ISE! website in the "Data Science Selection" section.
            </p>';
            $message .= "<p>Please note that each team can only submit the answer once and don't forget to check the guidelines. The due date for submission is September 1, 2022.
            </p>";
            $message .= "<p>If you have any questions, please contact us via WhatsApp Center (0851-6285-2050)";
            $message .= "<p>For more information, visit our social media at beacons.ai/ise2022";
            $message .= '<p><b>Best Regards,</b><br/>
    <b>ISE 2022</b><br/>
    <b>One Aim, One Goal, One ISE!</b> </p>';
        } else {
            $message = '<p><b>Dear ' . $this->name . '</b></p>';
            $message .= "<p>Sorry, your team did not pass the administrative selection of Data Science Academy ISE! 2022.
            </p>";
            $message .= "<p>If you have any questions, please contact us via WhatsApp Center (0851-6285-2050)";
            $message .= "<p>For more information, visit our social media at beacons.ai/ise2022";
            $message .= '<p><b>Best Regards,</b><br/>
    <b>ISE 2022</b><br/>
    <b>One Aim, One Goal, One ISE!</b> </p>';
        }

        return $this->subject('Data Science Academy ISE! 2022 Test Selection')->from('admin@ise-its.com', config('app.name'))->markdown(
            'vendor.mail.text.message',
            [
                'slot' => $message
            ]
        );
    }
}
