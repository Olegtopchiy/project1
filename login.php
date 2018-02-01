<?php
session_start();
$users = [
    1 => ['login'=>'user', 'pass'=>'1', 'name'=>'John'],
    2 => ['login'=>'admin', 'pass'=>'1', 'name'=>'Jack']
];
foreach ($users AS &$user){
    $user['pass'] = password_hash($user['pass'], PASSWORD_DEFAULT);
}

$user_id = &$_SESSION['user_id'];
$isNotGuest = (bool)$user_id;

if ($isNotGuest && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $found = false;
    foreach ($users AS $id => $user) {
        if (!strcasecmp($user['login'], $_POST['login'])) {
            $found = $id;
            break;
        }
    }
    if ($found !== false) {
        $isNotGuest = password_verify($_POST['pass'], $users[$found]['pass']);
        if ($isNotGuest) {
            $user_id = $found;
        }
    }
    echo $isNotGuest ? '' : 'login and/or password is incorrect';
}

if($isNotGuest) {
    echo 'Hello, '.$users[$user_id]['name'];
}else{
    ?>
    <form method="POST" action="/login.php">
        <input type="text" name="login"/>
        <input type="password" name="pass"/>
        <input type="submit" value="send"/>
    </form>
    <?php
}