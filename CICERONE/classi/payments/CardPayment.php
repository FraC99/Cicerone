<?php
namespace classi\payments;

class CardPayment extends AbPayment
{

    private $code;

    // codice numerico di 16 cifre
    private $cvv;

    // codice di 3 cifre posto sul retro della carta
    const CODE_SIZE = 16;

    // lunghezza codice identificativo carta di credito
    const CVV_SIZE = 3;

    // lunghezza codice cvv
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;
    }

    public function sendPayment(\classi\payments\float $import)
    {
        echo 'Inserisci codice cvv presente sul retro della carta';
    }

    // costruttore che crea l'oggetto e controlla che la lungezza del numero della carta sia giusto
    public function __construct(string $code)
    {
        if (strlen($code) == CODE_SIZE) {
            for ($i = 0; $i < strelen($code) - 1; $i ++) {

                if (strcmp(gettype($var), $str2)) {

                    $this->code = $code;
                } else {
                    echo 'Numero carta non valido';
                    \LengthException::class; // TODO test
                }
            }
        }
    }
}
