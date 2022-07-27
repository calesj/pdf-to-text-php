<?php

# Incluir autoload
include "../vendor/autoload.php";

$file = $_FILES['arquivo'];

if(empty($file)){
    echo "Arquivo não encontrado!";
}else {

    //instanciando o pdfParser
    $pdfParser = new \Smalot\PdfParser\Parser();

    //pegando o caminho do arquivo temporario que foi alocado na memoria do PHP e o transformando em string
    $nomeTemporario = strval($file['tmp_name']);

    //definindo o caminho de onde está o arquivo temporario
    $documento = $pdfParser->parseFile($nomeTemporario);

    //Retornando o texto da imagem
    $texto = $documento->getText();
    echo "<pre>";
    echo $texto;
    echo "</pre>";
}