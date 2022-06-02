<?php

class UsersContr extends Users
{
    public function createUser($name, $email, $birth)
    {
        $this->setUser($name, $email, $birth);
    }
}