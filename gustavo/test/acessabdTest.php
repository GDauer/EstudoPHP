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

    private $host, $user, $password, $database, $link;

    public function __construct($host='', $user='', $password='', $database='', $link=null)
    {
        $this->host     = $host;
        $this->user     = $user;
        $this->password = $password;
        $this->database = $database;
        $this->link     = $link;
    }


    public function testConnect($host='localhost', $user='root', $password='root', $database='Webjump')
    {

        $link = mysqli_connect("$host", "$user", "$password", "$database");

        if(!$link)
        {
            throw new Exception(mysqli_connect_error());
        }
        try{
            return $link;
        } catch (Exception $e) {
            echo 'Caught exception:', $e->getMessage();
        }

    }
}

