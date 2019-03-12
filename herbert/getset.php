<?php

class estudos {

    private $name;
    private $email;


public  function _construct($name, $email){

    $this-> name = $name;
    $this -> email =$email;
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

}


?>