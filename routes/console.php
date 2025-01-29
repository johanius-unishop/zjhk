<?php

use Illuminate\Support\Facades\Schedule;



Schedule::command('fetch:exchange-rates')->dailyAt('05:00')->timezone('Europe/Moscow');
Schedule::command('products:update-simple-products-stock-from-1c')->everyFiveMinutes();
Schedule::command('queue:work --stop-when-empty --queue=high,default')->everyMinute();