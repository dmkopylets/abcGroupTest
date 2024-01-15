<?php

namespace App\Data;

class InputData
{
    private array $data;

    public function __construct()
    {
        $this->data = [
            [
                'country_name' => 'USA',
                'country_code' => 'US',
                'city_name' => 'New York',
                'lat' => '40.7127753',
                'lng' => '-74.0059728',
            ],
            [
                'country_name' => 'USA',
                'country_code' => 'US',
                'city_name' => 'Los Angeles',
                'lat' => '34.0522342',
                'lng' => '-118.2436849',
            ],
            [
                'country_name' => 'Philippines',
                'country_code' => 'PH',
                'city_name' => 'Manila',
                'lat' => '14.5995124',
                'lng' => '120.9842195',
            ],
            [
                'country_name' => 'Philippines',
                'country_code' => 'PH',
                'city_name' => 'Cebu',
                'lat' => '10.3156993',
                'lng' => '123.8854377',
            ]
        ];
    }

    public function get(): array
    {
        return $this->data;
    }
}
