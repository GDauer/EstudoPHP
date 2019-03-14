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
    protected $CatNome, $sku;

    public function __construct($id=0, $CatNome='', $sku='')
    {
        $this->id       = $id;
        $this->CatNome  = $CatNome;
        $this->sku      = $sku;
    }

    /**
     * @return mixed
     */
    public function testgetId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function testgetCatNome()
    {
        return $this->CatNome;
    }

    /**
     * @return mixed
     */
    public function testgetSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $CatNome
     */
    public function testsetCatNome($CatNome='')
    {
        $this->CatNome = $CatNome;
    }

    /**
     * @param mixed $sku
     */
    public function testsetSku($sku='')
    {
        $this->sku = $sku;
    }

}