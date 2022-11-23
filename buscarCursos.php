<?php
use GuzzleHttp\Client;

$client = new Client();
$client->request(method: 'GET', uri: 'https://alura.com.br/cursos-online-programacao/php');