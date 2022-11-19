<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TalkShowEmail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('mails.talkshow-mail')->subject("ISE! Grand Talkshow 2022 Registration is Now Open!");

        $message = '<p><b>Dear, Metazen!</b></p>';
        $message .= "<p>Today is the day! ✨We would like to remind you that today ISE! Grand Talkshow 2022 will be held at 10.00 AM (WIB). Join the talk show at the specified time by clicking the link below.</p>";
        $message .= '<p>Link Zoom :  ise-its.com/ISE!GrandTalkshow2022<br>
        Meeting ID : 826 0695 5082<br>
        Passcode : ISE</p>';
        $message .= '<p></p>You can also access the webinar through Live Streaming YouTube on Information Systems Expo Channel :</p>';
        $message .= '<p>ise-its.com/LiveISE!GrandTalkshow2022</p>';
        $message .= '<p>Here are some things you need to pay attention to before attending the event : </p>';
        $message .= '<ul>
            <li><p>The zoom meeting will be opened at 10.00 AM (WIB)</p></li>
            <li><p>Participants are requested to be present on time and fully participate until the end of the event</p></li>
            <li><p>Participants must use virtual background and turn on the camera. You can download the virtual background at ise-its.com/VBGPesertaGT</p></li>
            <li><p>Participants are required to maintain the conduciveness of the event and are prohibited from speaking using words that offend SARA and other unpleasant things</p></li>
            <li><p>Participants are expected not to activate the microphone during the event, except in the QnA session, and have been invited by the moderator</p></li>
            <li><p>Participants are allowed to ask questions through the platform provided by the committee using a question format and ask questions directly if asked by the moderator</p></li>
        </ul>';
        $message .= '<p>Look forward to seeing you at the event! 👋🏻</p>';
        $message .= '<p>If you have any questions, please contact us via WhatsApp Center (0851-6285-2050)</p>';
        $message .= '<p>For more information, visit our social media at beacons.ai/ise2022</p>';
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        return $this->subject('[D-DAY] ISE! Grand Talkshow 2022')->from('admin@ise-its.com', config('app.name'))->markdown(
            'vendor.mail.text.message',
            [
                'slot' => $message
            ]
        );
    }
}
