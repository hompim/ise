<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class WebinarKickOffMail extends Mailable
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
        $message = '<p><b>Hai ' . Auth::user()->name . '</b></p>';
        $message .= '<p>Terimakasih telah mendaftar <b>Webinar Kick Off ISE! 2022</b>. Informasi selanjutnya akan diinformasikan menjelang acara dimulai. </p>';
        $message .= '<p>Sembari menunggu pelaksanaan Webinar Kick Off ISE! 2022, kamu dapat mengikuti rangkaian acara lain di ISE 2022 seperti:</p>';
        $message .= '<ol>
<li><p><b>Bionix College Level & Student Level</b>, kamu berkesempatan untuk magang hingga bekerja full time dengan perushaan yang bermitra dengan kami. Kamu dapat mulai berpartisipasi pada tanggal 31 Oktober - 7 November 2021.</p></li>
<li><p><b>IS Class</b>, pameran karya mahasiswa dan alumni Sistem Intormasi ITS dan juga kuis berhadiah menarik di website ISE. Kamu dapat mulai berpartisipasi pada tanggal  9 Oktober - 7 November 2021.</p></li>
</ol>';
        $message .= '<p>Informasi Lebih Lanjut Melalui Sosial Media ISE! 2022:<br/>
Instagram : @is_expo<br/>
Twitter : @is_expo<br/>
Whatsapp Center : 0877 5550 8283<br/>
</p>
';
        $message .= '<p><b>Best Regards,</b><br/>
<b>ISE 2022</b><br/>
<b>One Aim, One Goal, One ISE!</b> </p>';
        return $this->subject('Pendaftaran Webinar Kick Off ISE! 2022 Berhasil!')->from('admin@ise-its.com', config('app.name'))->markdown('vendor.mail.text.message',
            ['slot' => $message
            ]);
    }
}
