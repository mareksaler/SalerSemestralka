<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Tura;


class TuryController extends AControllerBase
{


    public function index()
    {
        return Tura::getAll();
    }

    public function pridaj() {
        if(!isset($_POST['nazov'])) return "";

        $tura = new Tura($_POST['nazov'], $_POST['text'], $_POST['img']);
        $tura->save();

        header("Location: http://localhost/SalerSemestralka?c=tury");
        die();
    }

    public function odstranit() {
        if(isset($_GET['id'])) {
            $tura = Tura::getOne($_GET['id']);
            $tura->delete();
            header("Location: http://localhost/SalerSemestralka?c=tury");
            die();
        }

    }

    public function uprav() {

        if(isset($_POST['id'])) {
            $tura = Tura::getOne($_POST['id']);
            $tura->setNazov($_POST['nazov']);
            $tura->setText($_POST['text']);
            if(!empty($_POST['img'])) {
                $tura->setImg($_POST['img']);
            }

            $tura->save();
            header("Location: http://localhost/SalerSemestralka?c=tury");
            die();
        }

        $tura = Tura::getOne($_GET['id']);
        return $tura;
    }
}