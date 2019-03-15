<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 14/03/19
 * Time: 12:20
 */

class crudProdTest extends acessabdTest
{
private $select;

    public function __construct($select = array())
    {
        $this->select = $select;
    }

    public function testinsertProd()
    {
        //include_once produtoTest.php;

        $prod = new produtoTest();

        $stmt = mysqli_prepare($this->testConnect(), "INSERT INTO Produto (nome, sku, categoria, preco, descricao, quantidade) VALUES (?,?,?,?,?,?)");
        mysqli_stmt_bind_param($stmt, 'sssdsi', $prod->testgetProdNome(), $prod->testgetSku(), $prod->testgetCatNome(), $prod->testgetPreco(), $prod->testgetDesc(), $prod->testgetQuant());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
    }

    public function testdeletProd()
    {
        $prod = new produtoTest();

        $stmt = mysqli_prepare($this->testConnect(), "DELETE FROM Produto WHERE prod_id = ? ");
        mysqli_stmt_bind_param($stmt, "i", $prod->testgetId());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
    }

    public function testselectProd()
    {
        $count = function() {

            $result = mysqli_query($this->testConnect(), "SELECT COUNT(*) FROM Produto");
            $result = $result->fetch_row();
            $result = $result[0];

            return $result;
        };
        for($i=0; $i <= $count(); $i++) {
            $result = mysqli_query($this->testConnect(), "SELECT * FROM Produto WHERE prod_id =". $i);
            $result = $result->fetch_row();
            $this->select[$i] = $result;
        }
        return $this->select;
    }



    public function testupdateProd()
    {
        $prod = new produtoTest();

        $stmt = mysqli_prepare($this->testConnect(), "UPDATE Produto SET nome = ?, sku = ?, preco = ?, quantidade = ?, categoria = ?, descricao = ? WHERE prod_id = ?; ");
        mysqli_stmt_bind_param($stmt, "ssdissi", $prod->testgetProdNome(), $prod->testgetSku(), $prod->testgetPreco(), $prod->testgetQuant(), $prod->testgetCatNome(), $prod->testgetDesc(), $prod->testgetId());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
    }

}