<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('king', function () {
    $this->comment("This is king command ! So, let's ROCK");
    $this->info("This is king command ! So, let's ROCK");
    $this->error("This is king command ! So, let's ROCK");
    $this->question("This is king command ! So, let's ROCK");
    $this->line("This is king command ! So, let's ROCK");
})->purpose('Display An King Line');