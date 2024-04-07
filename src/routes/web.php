<?php

use Illuminate\Support\Facades\Route;
use SmartPhp\HelloWorld\Controllers\HelloWorldController;

Route::get('hello-world', HelloWorldController::class);
