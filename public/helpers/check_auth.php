<?php
if (!array_key_exists('user', $_SESSION) || !$_SESSION['user']) {
    $_SESSION['errors'] = ['You need to login fool'];
    header("Location: /");
    exit;
}
