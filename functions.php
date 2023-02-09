<?php
//Funzione per generare una pswd
function generate_password($length)
{

    //preparo la pswd
    $password = '';

    //Setto la lunghezza minima
    $min_length = 5;

    //Preparo l'lenco dei caratteri
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $numbers = '0123456789';
    $symbols = '?=)(/&%$£"!{}[]#@_-<>';

    //Li metto tutti insieme
    $characters = $letters . strtoupper($letters) . $numbers . $symbols;

    //Conto quanti caratteri ho a disposizione
    $total_characters = mb_strlen($characters);

    // ! CONTROLLI
    if (empty($length)) return 'Non è stata fornita la lunghezza della password';
    if ($length < $min_length) return "La lunghezza minima della password è $min_length caratteri!";


    // ? Generazione della pswd

    //finchè non raggiungo la lunghezza
    while (mb_strlen($password) < $length) {
        //generiamo un index casuale
        $random_index = rand(0, $total_characters - 1);

        //Prendo un carettere con l'index casuale
        $random_character = $characters[$random_index];

        $password .= $random_character;
    }

    session_start();
    $_SESSION['password'] = $password;

    // ti faccio sapere l'esito 
    return true;
}
