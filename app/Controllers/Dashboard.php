<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $ftse100Stocks = array(
            array(
                'code' => 'AAPL',
                'stock' => 'Apple Inc.',
                'previous_close' => 155.10,
                'price' => 155.10,
                'change' => '0'
            ),
            array(
                'code' => 'GOOGL',
                'stock' => 'Alphabet Inc.',
                'previous_close' => 2750.50,
                'price' => 2775.80,
                'change' => '+25.30'
            ),
            array(
                'code' => 'MSFT',
                'stock' => 'Microsoft Corporation',
                'previous_close' => 320.40,
                'price' => 325.15,
                'change' => '+4.75'
            ),
            array(
                'code' => 'AMZN',
                'stock' => 'Amazon.com, Inc.',
                'previous_close' => 3300.00,
                'price' => 3325.50,
                'change' => '+25.50'
            ),
            array(
                'code' => 'TSLA',
                'stock' => 'Tesla, Inc.',
                'previous_close' => 650.50,
                'price' => 655.75,
                'change' => '+5.25'
            ),
            array(
                'code' => 'JPM',
                'stock' => 'JPMorgan Chase & Co.',
                'previous_close' => 160.80,
                'price' => 158.90,
                'change' => '-1.90'
            ),
            array(
                'code' => 'NFLX',
                'stock' => 'Netflix, Inc.',
                'previous_close' => 540.20,
                'price' => 545.75,
                'change' => '+5.55'
            ),
            array(
                'code' => 'NVDA',
                'stock' => 'NVIDIA Corporation',
                'previous_close' => 680.30,
                'price' => 685.50,
                'change' => '+5.20'
            ),
            array(
                'code' => 'BA',
                'stock' => 'The Boeing Company',
                'previous_close' => 210.10,
                'price' => 208.50,
                'change' => '-1.60'
            ),
            array(
                'code' => 'DIS',
                'stock' => 'The Walt Disney Company',
                'previous_close' => 180.80,
                'price' => 182.90,
                'change' => '+2.10'
            ),
            array(
                'code' => 'V',
                'stock' => 'Visa Inc.',
                'previous_close' => 250.50,
                'price' => 252.25,
                'change' => '+1.75'
            ),
            array(
                'code' => 'PYPL',
                'stock' => 'PayPal Holdings, Inc.',
                'previous_close' => 300.00,
                'price' => 305.75,
                'change' => '+5.75'
            )
        );

        $data['stocks'] = $ftse100Stocks;


        return view('dashboard/index', $data);
    }
}
