<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        VerifyEmail::toMailUsing(function (User $user, string $verificationUrl) {
            return (new MailMessage)
                ->greeting('Verifikasi Email Kamu')
                ->subject('Verifikasi Email Kamu')
                ->line('Halo, Data registrasi kamu telah berhasil kami terima. Verifikasi email kamu dengan mengklik tombol atau tautan di bawah ini: ')
                ->action('Verifikasi Email', $verificationUrl)
                ->line('Jika kamu tidak membuat akun, tidak perlu melanjutkan proses verifikasi.');
        });
        ResetPassword::toMailUsing(function (User $user, string $tokenReset) {
            return (new MailMessage)
                ->greeting('Reset Password Kamu')
                ->subject('Reset Password Kamu')
                ->line('Halo, Jika kamu lupa dengan password akun ISE mu, maka kamu dapat meresetnya dengan mengklik tombol atau tautan di bawah ini: ')
                ->action('Reset Password', route('password-reset',['token'=>$tokenReset,'email'=>$user->email]))
                ->line('Jika kamu tidak merasa melakukan tindakan reset password, maka abaikan email ini.');
        });
    }
}
