<?php

require_once 'User.php';
require_once 'UserService.php';

// CreateUsers
$user1 = new User('Jenya', 'password', new DateTime('1991-01-01'));
$user2 = new User('Sasha', 'password2', new DateTime('1985-02-12'));
$user3 = new User('Anton', 'password3', new DateTime('2001-11-19'));
$user4 = new User('Max', 'password4', new DateTime('1999-08-12'));
$user5 = new User('David', 'password5', new DateTime('2003-07-21'));

// UserArray
$users = [$user1, $user2, $user3, $user4, $user5];

// SortByName
$sortedByUsername = UserService::sortByUsername($users, 'asc');

// SortByBirthday
$sortedByBirthday = UserService::sortByBirthday($users, 'asc');

// ShowUsersArray
displayUsersByUsername($sortedByUsername);
echo '<br>';
displayUsersByBirthday($sortedByBirthday);

// ShowByUsername
function displayUsersByUsername($users) {
    echo "Usernames (ByUsername): <br>";
    foreach ($users as $user) {
        echo "Name: " . $user->getUsername() . ", Birthday: " . $user->getBirthday()->format('Y-m-d');
        echo '<br>';
    }
}

// ShowByBirthday
function displayUsersByBirthday($users) {
    echo "Birthdays (ByBirthday): <br>";
    foreach ($users as $user) {
        echo "Name: " . $user->getUsername() . ", Birthday: " . $user->getBirthday()->format('Y-m-d');
        echo '<br>';
    }
}
