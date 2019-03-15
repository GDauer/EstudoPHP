<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 14/03/19
 * Time: 11:08
 */


class produtoTest extends categoriaTest
{
    private $prodNome, $preco, $quant, $desc, $id;
    protected $CatNome, $sku;

    public function __construct($CatNome='', $prodNome='', $desc='', $quant=0, $preco=0.0, $id=0)
    {
        parent::__construct($CatNome);
        $this->prodNome  = $prodNome;
        $this->quant     = $quant;
        $this->desc      = $desc;
        $this->preco     = $preco;
        $this->id        = $id;
    }

    /**
     * @return int
     */
    public function testgetId()
    {
        if(isset($_POST['prodId'])) {
            return $this->id = htmlspecialchars($_POST['prodId']);
        }
    }

    /**
     * @return mixed
     */
    public function testgetCatNome()
    {
        return parent::testgetCatNome();
    }

    /**
     * @return mixed
     */
    public function testgetSku()
    {
        if(isset($_POST['sku'])) {
            return $this->sku = htmlspecialchars($_POST['sku']);
        }
    }

    /**
     * @return mixed
     */
    public function testgetProdNome()
    {
        if(isset($_POST['prodNome'])) {
            return $this->prodNome = htmlspecialchars($_POST['prodNome']);
        }
    }

    /**
     * @return mixed
     */
    public function testgetDesc()
    {
        if(isset($_POST['desc'])) {
            return $this->desc = htmlspecialchars($_POST['desc']);
        }
    }

    /**
     * @return mixed
     */
    public function testgetQuant()
    {
        if(isset($_POST['quant'])) {
            return $this->quant = htmlspecialchars($_POST['quant']);
        }
    }

    /**
     * @return mixed
     */
    public function testgetPreco()
    {
        if(isset($_POST['preco'])) {
            return $this->preco = htmlspecialchars($_POST['preco']);
        }
    }

}