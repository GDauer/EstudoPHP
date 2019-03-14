<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 14/03/19
 * Time: 11:41
 */
use PHPUnit\Framework\TestCase;

class acessabdTest extends TestCase
{

    private $host='localhost', $user='root', $password='root', $database='Webjump', $link;

    protected function testConnect($host, $user, $password, $database, $link)
    {

        $link = mysqli_connect("$host", "$user", "$password", "$database");
        if(!$link)
        {
            die("Connection has failed :( <br />" . mysqli_connect_error());
        }
    }
}
