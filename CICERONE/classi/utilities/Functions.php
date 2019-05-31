<?php
namespace classi\utilities;

abstract class Functions
{
    
    /**La funzione string_control rimuove eventuali blankspace presenti all'inizio e alla fine della stringa
     * 
     * @param string $string
     * @return array
     */
    public function string_control(string $string)
    {
        $string_array = str_split($string);
        while ((strlen($string_array) == 0) || ($string_array[strlen($string_array) - 1] == ' ') || ($string_array[0] == ' ')) {
            
            //elimina caratteri vuoti dalla fine
            while ((strlen($string_array) != 0) && (string[strlen($string_array) - 1] == ' ')) {
                string[strlen($string_array) - 1] = '\0';
            }
        } // end while
        return $string_array;
    }
}

 