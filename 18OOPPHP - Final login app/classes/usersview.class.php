<?php

class UsersView extends Users
{
    public function showUser($id)
    {
        $results=$this->getUser($id);

        echo "
            <td>".$results[0]['id'] . "</td>
            <td>".$results[0]['name'] . "</td>
            <td>".$results[0]['email'] . "</td>
            <td>".$results[0]['birth'] . "</td>
        ";
    }
    public function showAllUsers()
    {
    }
}