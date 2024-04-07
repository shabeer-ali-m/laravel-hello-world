<?php

namespace SmartPhp\HelloWorld;

use Illuminate\Support\Facades\Http;

class HelloWorld
{
    public function randomQuote()
    {
        $response = Http::get('https://api.quotable.io/random');
        return json_decode($response, true);
    }
}
