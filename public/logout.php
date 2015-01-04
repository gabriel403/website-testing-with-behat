<?php
if (array_key_exists('user', $_SESSION)) {
    unset($_SESSION['user']);
    $_SESSION['success'] = ['Logged out'];
}

header("Location: /");
