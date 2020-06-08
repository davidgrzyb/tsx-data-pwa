<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function getPrice(string $ticker) : array
    {
        return [
            'ticker' => 'VSP.TO',
            'price' => '26.33',
            'amount_change' => '5.23',
            'percentage_change' => '1.45',
        ];
    }
}
