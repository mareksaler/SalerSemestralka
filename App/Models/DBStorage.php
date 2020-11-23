<?php
namespace App\Models;

use PDO;

class DBStorage extends AStorage
{
    private const DB_HOST = 'localhost';
    private const DB_NAME = 'semestralka';
    private const DB_USER = 'root';
    private const DB_PASS = 'dtb456';

    private $db;

    /**
     *@var PDO
     */
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:dbname=' . self::DB_NAME . ';host=' .
            self::DB_HOST, self::DB_USER, self::DB_PASS);
        } catch (PDOException $e) {
            echo 'Nepodarilo sa pripojit' . $e->getMessage();
        }

    }

    function nacitajVsetkyData()
    {
        $tury = [];
        $dbTury = $this->db->query('SELECT * FROM tury');
        foreach ($dbTury as $tura) {
            $tury[] = new Tura($tura['nazov'], $tura['text'],
                $tura['img']);
        }
        return $tury;
    }

    function uloz(Tura $tura)
    {
        try {
            $sql = 'INSERT INTO tury(nazov, text, img) VALUES (?, ?, ?)';
            $this->db->prepare($sql)->execute([$tura->getNazov(),
                $tura->getText(), $tura->getImg()]);
        } catch (PDOException $e) {
            echo 'Chyba pri vkladani' . $e->getMessage();
        }
        header("Location: tury.php");
    }


}