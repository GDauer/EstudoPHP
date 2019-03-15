<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 14/03/19
 * Time: 10:49
 */
use PHPUnit\Framework\TestCase;

class categoriaTest extends TestCase
{
    private $id;
    protected $CatNome, $sku, $indice;

    public function __construct($id=0, $CatNome='', $sku='')
    {
        $this->id       = $id;
        $this->CatNome  = $CatNome;
        $this->sku      = $sku;
        $this->indice   = $indice;
    }

    /**
     * @return mixed
     */
    public function testgetId()
    {
        if(isset($_POST['catId'])) {
            return $this->id = htmlspecialchars($_POST['catId']);
        }
    }

    /**
     * @return mixed
     */
    public function testgetCatNome()
    {
        if(isset($_POST['catNome'])) {
            return $this->CatNome = htmlspecialchars($_POST['catNome']);
        }
    }

    public function testgetCatIndice()
    {
        if(isset($_POST['catIndice'])) {
            return $this->CatNome = htmlspecialchars($_POST['catNome']);
        }
    }

    /**
     * @param mixed $sku
     */
    public function testsetSku($sku)
    {
        $this->sku = $sku;
    }
}