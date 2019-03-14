<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 14/03/19
 * Time: 12:20
 */

class crudProdTest extends acessabdTest

{
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
        $count = array();
        $temp = array();
        $prod = array();
        $select = 'Produto';
        $stmt = null;

        $stmt = mysqli_stmt_prepare($stmt, "SELECT COUNT(*) FROM Webjump.Produto;");
        mysqli_stmt_execute($stmt);

        $count = mysqli_stmt_get_result($stmt);
        $count = mysqli_fetch_array($count, MYSQLI_ASSOC);

        $chave = $count['COUNT(*)'];

        for($i=0; $i <= $chave; $i++)
        {
            $stmt = mysqli_prepare($this->testConnect(), "SELECT * FROM ? WHERE prod_id = ?");
            mysqli_stmt_bind_param($stmt, "si", $select, $i);
            mysqli_stmt_execute($stmt);

            $temp = mysqli_stmt_get_result($stmt);
            $temp = mysqli_fetch_array($temp, MYSQLI_ASSOC);
            $prod[$i] = $temp;
        }
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
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