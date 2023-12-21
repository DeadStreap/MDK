<?php
require_once 'User.php';

class UserService
{
    public static function sortByUsername(array $users, string $direction)
    {
        usort($users, function ($a, $b) use ($direction) {
            if ($direction === 'asc') {
                return strcmp($a->username, $b->username);
            } else if ($direction === 'desc') {
                return strcmp($b->username, $a->username);
            }
        });

        return $users;
    }

    public static function sortByBirthday(array $users, string $direction)
    {
        usort($users, function ($a, $b) use ($direction) {
            if ($direction === 'asc') {
                return $a->birthday <=> $b->birthday;
            } else if ($direction === 'desc') {
                return $b->birthday <=> $a->birthday;
            }
        });

        return $users;
    }
}
