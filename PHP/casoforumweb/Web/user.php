<?php

namespace Web;

class User
{
    public $username;
    public $email;

    public function __construct(
        string $username,
        string $email
    ){
        $this->username = $username;
        $this->email = $email;
    }
}
?>