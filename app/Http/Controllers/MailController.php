<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail() {
        $details = [
            'title' => 'Mail from Larave Email',
            'body' => 'This email is intended to a customer to notify the on our up coming products.'
        ];

        $users = User::all();

        foreach ($users as $user) {
            Mail::to($user->email)->send(new TestMail($details));
        }

        return 'Email Sent';
    }
}
