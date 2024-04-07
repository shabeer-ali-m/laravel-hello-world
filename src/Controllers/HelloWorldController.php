<?php

namespace SmartPhp\HelloWorld\Controllers;

use Illuminate\Http\Request;
use SmartPhp\HelloWorld\HelloWorld;

class HelloWorldController
{
    public function __invoke(HelloWorld $hello)
    {
        $quote = $hello->randomQuote();
        return view('helloworld::index', $quote);
    }
}
