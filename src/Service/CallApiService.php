<?php 

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }
    
    public function getCity(string $city): array
    {
        return $this->getApi($city);
    }


    public function getApi(string $city): array
    {
        $respone = $this->client->request(
            'GET',
            'https://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=a6764c3895eb30214f1bd90775c5618b&units=metric&lang=FR'
        );
        return $respone->toArray();
    }
}