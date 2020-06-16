<?php

require_once 'UserRole.php';

class NormalState implements IUserRole
{
    // 状態は複製してはいけないのでsingltonで定義
    private static $singleton = null;

    public static function getInstance()
    {
        if (is_null(self::$singleton)) {
            self::$singleton = new NormalState();
        }
        return self::$singleton;
    }

    public function getState()
    {
        return '一般ユーザーです';
    }

    public function isAdmin()
    {
        return false;
    }

    public function getMenu()
    {
        $menu = [
            'ダッシュボード',
            '設定一覧'
        ];

        return $menu;
    }
}