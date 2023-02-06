<?php
require 'vendor\autoload.php';
require 'src/Buscador.php';

use GuzzleHttp\Client;
use Ruan\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);

$crawler = new Crawler();

// $cursos = $crawler->filter('h4.busca-resultado-nome');

$buscador = new Buscador($client, $crawler);


$buscador->buscar('busca?query=php'); 

