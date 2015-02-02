<?php
if (!array_key_exists('user', $_SESSION) || !$_SESSION['user']) {
    $_SESSION['errors'] = ['You need to login fool'];
    header("Location: /");
    exit;
}


function authorise($role)
{
    if (!authorised($role)) {
        $_SESSION['errors'] = ['Not authorised'];
        header("Location: /dashboard.php");
        exit;
    }
}

function authorised($role)
{
    return in_array($role, $_SESSION['user']['roles']);
}
