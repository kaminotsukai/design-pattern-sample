<?php

interface IUserRole {
    
    public function isAdmin();

    public function getState();

    public function getMenu();
}