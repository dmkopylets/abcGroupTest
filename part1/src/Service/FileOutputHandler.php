<?php

declare(strict_types=1);

namespace App\Service;

class FileOutputHandler
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function print(array $data): void
    {
        $csvFile = fopen($this->filePath, 'w');
        fwrite($csvFile, 'Country name, Country code, Lat, Long' . PHP_EOL);

        foreach ($data as $item) {
            fputcsv($csvFile, $item, ',');
        }
        fclose($csvFile);
    }
}
