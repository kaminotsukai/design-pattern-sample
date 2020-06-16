<?php

class User
{
    private $name;

    /** @var IUserRole */
    private $role;

    public function __construct($name)
    {
        $this->name = $name;

        // 初期値は一般ユーザー
        $this->role = NormalState::getInstance();
    }

    public function changeRole(IUserRole $role)
    {
        $this->role = $role;
    }

    public function getState()
    {
        return $this->role->getState();
    }

    public function isAdmin()
    {
        return $this->role->isAdmin();
    }

    public function getMenu()
    {
        return $this->role->getMenu();
    }
}