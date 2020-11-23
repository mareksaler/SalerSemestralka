<?php
namespace App\Models;


abstract class AStorage
{
    public function spracujData()
    {
        if (isset($_POST['sent'])) {
            $this->uloz(new Tura(NULL,$_POST['nazov'], $_POST['text'],
                $_POST['img']));
        }
    }

    public function vymazData() {
        if (isset($_POST['odstranit'])) {

        }
    }

    abstract function nacitajVsetkyData();

    abstract function uloz(Tura $tura);


}