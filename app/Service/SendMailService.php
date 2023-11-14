<?php

namespace App\Service;

use Illuminate\Support\Facades\Mail;

class SendMailService
{
    public function sendMailParent($user_email)
    {
        Mail::send('admin.parent.send-mail', [
        ], function ($mail) use ($user_email) {
            $mail->from('thientamjvb@gmail.com');
            $mail->to($user_email);
            $mail->subject('Grant permissions to parent');
        });
    }
}
