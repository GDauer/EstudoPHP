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
            if(is_int($_POST['prodId'])) {
                return $this->id = strip_tags($_POST['prodId']);
            } else {return 0;}
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
            if(is_string($_POST['sku']) == true && $_POST['sku'] != null && $_POST['sku'] != "") {
                return $this->sku = strip_tags(htmlspecialchars(addslashes($_POST['sku'])));
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco!'); 
                window.location.href='addProduct.html';</script>";
            }
        }
    }

    /**
     * @return mixed
     */
    public function testgetProdNome()
    {
        if(isset($_POST['prodNome'])) {
            if(is_string($_POST['prodNome']) == true && $_POST['prodNome'] != null && $_POST['prodNome'] != "") {
                return $this->prodNome = strip_tags(htmlspecialchars(addslashes($_POST['prodNome'])));
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco!'); 
                window.location.href='addProduct.html';</script>";
            }
        }
    }

    /**
     * @return mixed
     */
    public function testgetDesc()
    {
        if(isset($_POST['desc'])) {
            if(is_string($_POST['desc']) == true && $_POST['desc'] != null && $_POST['desc'] != "") {
                return $this->desc = strip_tags(htmlspecialchars(addslashes($_POST['desc'])));
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco!'); 
                window.location.href='addProduct.html';</script>";
            }
        }
    }

    /**
     * @return mixed
     */
    public function testgetQuant()
    {
        if(isset($_POST['quant'])) {
            if(is_int($_POST['quant']) == true && $_POST['quant'] != null) {
                return $this->quant = $_POST['quant'];
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco e só serão aceitos números inteiros!'); 
                window.location.href='addProduct.html';</script>";
            }
        }
    }

    /**
     * @return mixed
     */
    public function testgetPreco()
    {
        if(isset($_POST['preco'])) {
            str_ireplace(",", ".", $_POST['preco']);

            if(is_double($_POST['preco']) == true && $_POST['preco'] != null && $_POST['preco'] > 0.0) {
                return $this->preco = $_POST['preco'];
            } else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco e não serão aceitos produtos com valor <= 0!'); 
                window.location.href='addProduct.html';</script>";
            }
        }
    }

}