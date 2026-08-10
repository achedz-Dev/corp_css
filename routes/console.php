<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about:umpsa-css', function (): void {
    $this->info('UMPSA Corporate CSS platform');
})->purpose('Display UMPSA Corporate CSS information');

