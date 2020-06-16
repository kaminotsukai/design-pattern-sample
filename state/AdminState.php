<?php

require_once 'UserRole.php';

class AdminState implements IUserRole
{
    // 状態は複製してはいけないのでsingltonで定義
    private static $singleton = null;

    public static function getInstance()
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new AdminState();
        }
        return self::$singleton;
    }

    public function getState()
    {
        return '管理者です';
    }

    public function isAdmin()
    {
        return true;
    }

    public function getMenu()
    {
        $menu = [
            '管理画面',
            'ダッシュボード',
            '設定一覧'
        ];

        return $menu;
    }
}