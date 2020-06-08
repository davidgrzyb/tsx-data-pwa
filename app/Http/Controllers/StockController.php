<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Weidner\Goutte\GoutteFacade as Goutte;

class StockController extends Controller
{
    public function getPrice(string $ticker) : array
    {
        $data = Cache::remember($ticker, 10, function () use ($ticker) {
            $crawler = Goutte::request('GET', 'https://web.tmxmoney.com/quote.php?qm_symbol=' . $ticker);

            try {
                $name = $crawler->filter('#contentWrapper > div > div > div > div:nth-child(1) > div > div.row > div.col-lg-8 > div.quote-company-name > h4')->text();
                $ticker = explode(" ", $crawler->filter('#contentWrapper > div > div > div > div:nth-child(1) > div > div.row > div.col-lg-8 > div.quote-company-symbol > div > div.col-md-5.col-lg-5 > div')->text())[0];
                $price = $crawler->filter('#contentWrapper > div > div > div > div:nth-child(1) > div > div.row > div.col-lg-8 > div.quote-company-symbol > div > div.col-md-5.col-lg-5 > div > span > span')->text();
                $change = $crawler->filter('#contentWrapper > div > div > div > div:nth-child(1) > div > div.row > div.col-lg-8 > div.quote-company-symbol > div > div.col-md-7.symbol-index > div > div.col-5.col-md-6 > strong')->text();
            
                return [
                    'name' => $name,
                    'ticker' => $ticker,
                    'price' => $price,
                    'change' => $change,
                ];
            } catch (Exception $e) {
                return [
                    'error' => 'Ticker not found.',
                ];
            }
        });

        return $data;
    }
}
