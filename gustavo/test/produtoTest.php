<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 14/03/19
 * Time: 11:08
 */


class produtoTest extends categoriaTest
{
    private $prodNome, $preco, $quant, $desc;
    protected $CatNome, $sku;

    public function __construct($CatNome='', $prodNome='', $desc='', $quant=0, $preco=0.0)
    {
        parent::__construct($CatNome);
        $this->prodNome  = $prodNome;
        $this->quant     = $quant;
        $this->desc      = $desc;
        $this->preco     = $preco;
    }

    public function testgetCatNome()
    {
        return parent::testgetCatNome(); // TODO: Change the autogenerated stub
    }

    /**
     * @return mixed
     */
    public function testgetSku()
    {
        return $this->sku;
    }

    /**
     * @return mixed
     */
    public function testgetProdNome()
    {
        return$this->prodNome;
    }

    /**
     * @return mixed
     */
    public function testgetDesc()
    {
        return $this->desc;
    }

    /**
     * @return mixed
     */
    public function testgetQuant()
    {
        return $this->quant;
    }

    /**
     * @return mixed
     */
    public function testgetPreco()
    {
        return $this->preco;
    }


    /**
     * @param mixed $sku
     */
    public function testsetSku($sku='')
    {
        $this->sku = $sku;
    }

    public function testsetCatNome($CatNome = '')
    {
        parent::testsetCatNome($CatNome); // TODO: Change the autogenerated stub
    }

    /**
     * @param mixed $desc
     */
    public function testsetDesc($desc='')
    {
        $this->desc = $desc;
    }

    /**
     * @param mixed $quant
     */
    public function testsetQuant($quant=0)
    {
        $this->quant = $quant;
    }

    public function testsetPreco($preco=0.0)
    {
        $this->preco = $preco;
    }

    public function testsetProdNome($prodNome='')
    {
        $this->prodNome = $prodNome;
    }


}