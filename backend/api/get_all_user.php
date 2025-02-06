<?php

require('../inc/core.php');
$core = new Core();
$request = new \stdClass();
$condition = "deleted='no'";
$users = $core->get_all('users', '*', $condition);

$request->meta = [
    "error" => false,
    "message" => 'Successful',
];
$request->users = $users;

echo json_encode($request);
