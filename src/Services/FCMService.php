<?php

namespace Kulchandu\PushNotificationApp\Services;

use Illuminate\Support\Facades\Http;

class FCMService
{
    public static function send($token, $notification, $data)
    {
        if (isset($data) && empty($data)) {
            $data = ["page" => ""];
        }

        $response = Http::acceptJson()->withToken(config('fcm.token'))->post(
            'https://fcm.googleapis.com/fcm/send',
            [
                'to' => $token,
                'notification' => $notification,
                'data' => $data
            ]
        );

        return $response;
    }
}
