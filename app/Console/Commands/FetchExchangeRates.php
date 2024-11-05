<?php

namespace App\Console\Commands;

use App\Models\Currency;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FetchExchangeRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:exchange-rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch exchange rates from Central Bank of Russia website';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $url = 'https://www.cbr.ru/scripts/XML_daily.asp'; // URL of the XML file
        $xml = simplexml_load_file($url);

        $currenciesDB = Currency::all();

            foreach ($xml->Valute as $valute) {
                $charCode = (string)$valute->CharCode;
                $nominal = (int)$valute->Nominal;
                $value = (float)str_replace(',', '.', substr($valute->Value, 0, strpos($valute->Value, '.') + 5));
                
                foreach ($currenciesDB as $currencyDB){
                // Проверяем наличие текущего charCode в списке из базы данных
                    if ($charCode === $currencyDB->charcode) {
                        // Обновление курса в базе данных
                        $cb_rate = $value / $nominal;
                        DB::table('currencies')
                            ->where('id', $currencyDB->id)
                            ->update(['cb_rate' => $cb_rate]);
                        if ($currencyDB->auto_calc_cbrf === 1){
                            $internal_rate = round($cb_rate * $currencyDB->auto_multiplier,2);
                            DB::table('currencies')
                                ->where('id', $currencyDB->id)
                                ->update(['internal_rate' => $internal_rate]);
                        }
                    }
                    
                }
            }
        $this->info('Курс валют успешно обновлен.');
    }
}
