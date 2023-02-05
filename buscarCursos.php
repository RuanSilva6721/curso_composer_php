<?php
require 'vendor\autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$resposta = $client->request('GET','https://www.alura.com.br/busca?query=php', [
    'verify' => false
]);

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('h4.busca-resultado-nome');

foreach ($cursos as $domElement) {
   echo 'I curso de! '. $domElement->textContent . PHP_EOL;
}