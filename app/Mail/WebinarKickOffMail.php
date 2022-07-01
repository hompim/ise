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
<li><p><b>Bionix College Level & Student Level</b>, Olimpiade bisnis dan IT terbesar di Indonesia untuk tingkat pelajar SMA/SMK sederajat.BIONIX Student Level dilaksanakan melalui empat tahapan kompetisi dengan konsep acara daring penuh.</p></li>
<li><p><b>IS Class</b>, pSimulasi perkuliahan yang memberikan kamu, para siswa/i SMA/SMK/sederajat, pengalaman menjadi seorang mahasiswa Sistem Informasi ITS. Dapatkan informasi seputar keilmuan dan keprofesian, serta rasakan langsung dunia perkuliahan bersama dosen-dosen terbaik di bidangnya.</p></li>
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
