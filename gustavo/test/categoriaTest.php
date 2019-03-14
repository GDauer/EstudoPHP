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

    public function __construct($id, $CatNome, $sku)
    {
        $this->id = $id;
        $this->CatNome = $CatNome;
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCatNome()
    {
        return $this->CatNome;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $CatNome
     */
    public function setCatNome($CatNome)
    {
        $this->CatNome = $CatNome;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

}