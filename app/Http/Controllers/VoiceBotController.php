<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;

class VoiceBotController extends Controller
{
    public function inbound(Request $request)
    {
        $response = new VoiceResponse();
        $gather = $response->gather([
            'input' => 'speech',
            'timeout' => 3,
            'speechTimeout' => 'auto'
        ]);
        $gather->say('Hello! This is your Voice AI assistant. How can I help you today?');

        return response($response, 200)
            ->header('Content-Type', 'text/xml');
    }
}
