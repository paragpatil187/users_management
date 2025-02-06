
<?php

require('../inc/core.php');
$core = new Core();
$request = new \stdClass();

if (isset($_POST)) {
    $json = file_get_contents('php://input');
    $data = json_decode($json);
    $id = $data->id;
    $condition = "id=$id AND deleted='no'";
    $users = $core->get('users', '*', $condition);

}

$request->meta = [
    "error" => false,
    "message" => 'Successfull',
];
$request->users = $users;

echo json_encode($request);
?>
