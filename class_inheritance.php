<?php

class User {
    var $first_name;
    var $last_name;
    var $username;

    function full_name() {
        return $this->first_name .' '. $this->last_name;
    }
}

class Customer extends User {

}

$user = new User;
$user->first_name = "Jerry";
$user->last_name = "Seinfeld";
$user->username = "jSeinfeld";

$c = new Customer;
$c->first_name = "George";
$c->last_name = "Costanza";
$c->username = "GCostanza";

echo $user->full_name() .'<br \>';
echo $c->full_name() .'<br \>';

echo get_parent_class($user) .'<br \>';
echo get_parent_class($c) .'<br \>';

if(is_subclass_of($c, 'User')) {
    echo "Instance is a sub class of user <br \>";
}

$parents = class_parents($c);
echo implode(', ', $parents);
?>