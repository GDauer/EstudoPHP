<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 15/03/19
 * Time: 11:45
 */

class crudCatTest extends acessabdTest
{
    private $select;

    public function __construct($select = array())
    {
        $this->select = $select;
    }

    public function testinsertCat()
    {
        $cat = new categoriaTest();

        $stmt = mysqli_prepare($this->testConnect(), "INSERT INTO Categoria (nome, sku, cat_id) VALUES (?,?,?)");
        mysqli_stmt_bind_param($stmt, 'sss', $cat->testgetCatNome(), $cat->testsetSku(), $cat->testgetId());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
    }

    public function testdeletCat()
    {
        $cat = new categoriaTest();

        $stmt = mysqli_prepare($this->testConnect(), "DELETE FROM Categoria WHERE cat_id = ? ");
        mysqli_stmt_bind_param($stmt, "s", $cat->testgetId());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
    }

    public function testselectCat()
    {
        $count = function() {

            $result = mysqli_query($this->testConnect(), "SELECT COUNT(*) FROM Categoria");
            $result = $result->fetch_row();
            $result = $result[0];

            return $result;
        };
        for($i=0; $i <= $count(); $i++) {
            $result = mysqli_query($this->testConnect(), "SELECT * FROM Categoria WHERE indice =". $i);
            $result = $result->fetch_row();
            $this->select[$i] = $result;
        }
        return $this->select;
    }

    public function testupdateCat()
    {
        $cat = new categoriaTest();


        $stmt = mysqli_prepare($this->testConnect(), "UPDATE Categoria SET nome = ?, cat_id = ? WHERE indice = 0");
        mysqli_stmt_bind_param($stmt, "ss", $cat->testgetCatNome(), $cat->testgetId());
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($this->testConnect());
    }


}