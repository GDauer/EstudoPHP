<?php

class estudos {

    private $name;
    private $email;
    private $idade;


public  function _construct($name, $email ,$idade){

    $this-> name = $name;
    $this -> email =$email;
    $this -> idade =$idade;

}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name = $_POST['name'];
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email = $_POST['email'];
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade = $_POST['idade'];
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }


}


    ?>