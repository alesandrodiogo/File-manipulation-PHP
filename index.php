<?php

//========= Funcao para abrir e ler um ficheiro de texto ==================

//Ler um ficheiro de texto
function readFileText()
{
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("webdictionary.txt"));
    fclose($myfile);
}
//readFileText();

//Ler apenas uma linha do ficheiro
function readOneLineText()
{
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
}
//readOneLineText();

//Ler linha por linha do ficheiro
function lineByLineText()
{
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while (!feof($myfile)) {
        echo fgets($myfile) . "<br>";
    }
    fclose($myfile);
}
//lineByLineText();

//=========================================

//========= Funcao para criar e escrever num ficheiro de texto ==================

//Criar um ficheiro de texto
function createFile()
{
    $myfile = fopen("testfile.txt", "w");
}
//createFile();

//Escrever num ficheiro de texto
function writeToFile()
{
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $name = "Name: ";
    $formation = "Graduated in: ";
    $txt = $name . "Alesandro Diogo\n";
    fwrite($myfile, $txt);
    $txt = $formation . "Informatica\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}
//writeToFile();

//Adicionar texto em um ficheiro de texto existente
function appendTextToFile()
{
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    $txt = "Universidade Metodista de Angola\n";
    fwrite($myfile, $txt);
    $data = date('Y-m-d');
    $txt = $data . "\n";
    fwrite($myfile, $txt);
    fclose($myfile);
}
appendTextToFile();
