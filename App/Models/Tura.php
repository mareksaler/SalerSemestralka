<?php
namespace App\Models;



use App\Core\Model;

class Tura extends Model
{
    protected $nazov;
    protected $text;
    protected $img;
    protected $id;

    public function __construct($nazov = "", $text = "", $img = "")
    {
        $this->nazov = $nazov;
        $this->text = $text;
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getNazov()
    {
        return $this->nazov;
    }

    /**
     * @param mixed $nazov
     */
    public function setNazov($nazov)
    {
        $this->nazov = $nazov;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    static public function setDbColumns()
    {
        return ['id', 'nazov', 'text', 'img'];
    }

    static public function setTableName()
    {
        return "tury";
    }
}