<?php

require 'vendor/autoload.php';

use \GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use \Haruosugano\BuscadorDeCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('https://www.alura.com.br/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo exibeMensagem($curso);
}
