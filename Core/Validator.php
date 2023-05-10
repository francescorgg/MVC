<?php

namespace Core;

class Validator 
{
    public static function string($value, $min = 1, $max = INF)
    {
        
        //abbiamo visto come nel caso di + caratteri vuoti riusciamo a superare la validation rules: cominciare dal trim del dato
        $value = trim($value);

        //sappiamo inoltre che abbiamo due regole fondamentali: il valore deve essere compreso tra due valori Es. 1 <= $value <= 1000 ($max verra impostato su 1000 nel file notes). 
        //Cominciare da argomenti nella funzione impostando valori standard.

        return strlen($value) >= $min && strlen($value) <= $max;

    }

    //seguendo stessa logica, aggiungere un controllo per le email, utile per quando implementeremo il form di autenticazione/registrazione

    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}