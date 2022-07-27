<?php

# Incluir autoload
include "../vendor/autoload.php";

$file = $_FILES['arquivo'];

if(!isset($file)){
    echo "Arquivo não encontrado!";
}
$pdfParser= new \Smalot\PdfParser\Parser();
$nomeTemporario = strval($file['tmp_name']);
$documento = $pdfParser->parseFile($nomeTemporario);

$texto = $documento->getText();
echo "<pre>";
echo $texto;
echo "</pre>";