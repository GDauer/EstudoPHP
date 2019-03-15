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

    public function __construct($id=0, $CatNome='', $sku='', $indice=0)
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
            if(is_string($_POST['catId']) == true && $_POST['catId'] != null) {
                return $this->id = strip_tags(htmlspecialchars(addslashes($_POST['catId'])));
            }
            else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco!'); 
                window.location.href='addCategory.html';</script>";
            }
        }
    }

    /**
     * @return mixed
     */
    public function testgetCatNome()
    {
        if(isset($_POST['catNome'])) {
            if(is_string($_POST['catNome']) == true && $_POST['catNome'] != null) {
                return $this->CatNome = strip_tags(htmlspecialchars(addslashes($_POST['catNome'])));
            }
            else {
                echo "<script language='javascript' type='text/javascript'>alert('ERRO: O campo não pode ficar em branco!'); 
                window.location.href='addCategory.html';</script>";
            }
        }
    }

    /**
     * @return mixed
     */
    public function testgetIndice()
    {
        if(isset($_POST['catIndice'])) {
            if(is_int($_POST['catIndice']) == true && $_POST['catIndice'] != null) {
                return $this->indice = strip_tags($_POST['catIndice']);
            }
        }
    }

    /**
     * @param mixed $sku
     */
    public function testsetSku($sku='')
    {
        $prod = new produtoTest();

        $sku = $prod->testgetSku();
        $this->sku = $sku;
    }


}