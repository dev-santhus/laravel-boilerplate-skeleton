<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function (): void {
    $this->comment('Stay inspired!');
})->purpose('Display a simple inspirational message');
