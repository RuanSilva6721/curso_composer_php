<?php

namespace Ruan\BuscadorDeCursos;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class Buscador{
    private $httpClient;
    private $crawler;

    public function __construct(Client $httpClient, Crawler $crawler) {
        $this->httpClient = $httpClient;
        $this->crawler = $crawler;
    }

    public function buscar(String $url){
        $resposta = $this->httpClient->request('GET',$url, [
            'verify' => false
        ]);
        
        
        $html = $resposta->getBody();
        $this->crawler->addHtmlContent($html);

        foreach ($this->crawler as $domElement) {
            echo 'I curso de! ' . $domElement->textContent . PHP_EOL;
        }
        
    }
}

