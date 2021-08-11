<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserNotifcation;
use Illuminate\Http\Request;

class TestUserData extends Controller
{
    public function sendUserNotification() {

        $user = User::first();

        $userData = [
            'body' => 'You received an new test notification',
            'userText' => 'You are allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'You have 14 days to enroll',
        ];

        $user->notify(new UserNotifcation($userData ));

    }
}
