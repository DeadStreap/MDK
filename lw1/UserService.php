<?php
require_once 'User.php';

class UserService {
    public static function sortByUsername($users, $direction = 'asc') {
        usort($users, function($a, $b) use ($direction) {
            if ($direction === 'asc') {
                return strcmp($a->username, $b->username);
            }
        });
        return $users;
    }
    
    public static function sortByBirthday($users, $direction = 'asc') {
        usort($users, function($a, $b) use ($direction) {
            if ($direction === 'asc') {
                return $a->birthday <=> $b->birthday;
            }
        });
        
        return $users;
    }
}
