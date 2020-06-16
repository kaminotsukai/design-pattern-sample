<?php

require_once 'User.php';

class UserService
{
    public function add()
    {
        $user = new User('misoSoup');

        echo $user->role->getState();

        echo $user->role->changeRole(AdminState::getInstance());
    }
}
