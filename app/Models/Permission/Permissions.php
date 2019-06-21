<?php


namespace App\Models\Permission;


class Permissions
{
    const TOTALACCESS = '1';
    const SUPPORTERACCESS = '2';
    const USERACCESS = '3';

    public static function getPermission()
    {
        return [
            self::TOTALACCESS=>'دسترسی کل',
            self::SUPPORTERACCESS=>'دسترسی پشتیبان',
            self::USERACCESS=>'دسترسی کاربر'
        ];
    }

    public static function getPermissionName(int $permission)
    {
        return self::getPermission()[$permission];
    }
}