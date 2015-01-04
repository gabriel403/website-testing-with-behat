<?php
if (!array_key_exists('email', $_POST) || !array_key_exists('password', $_POST)) {
    $_SESSION['errors'] = ['email or password not set'];
    header("Location: /");
    exit;
}

if (strlen($_POST['email']) === 0 || strlen($_POST['password']) === 0) {
    $_SESSION['errors'] = ['email or password not set'];
    header("Location: /");
    exit;
}

$authDetails = [
    ['email' => 'me@g403.co', 'password' => 'somepassword', 'details' => ['name' => 'Gabriel Baker']]
];

$authenticated = false;

foreach ($authDetails as $authDetail) {
    if ($_POST['email'] === $authDetail['email'] && $_POST['password'] === $authDetail['password']) {
        $authenticated = $authDetail['details'];
    }
}

if (!$authenticated) {
    $_SESSION['errors'] = ['Invalid authentication details'];
    header("Location: /");
    exit;
}

$_SESSION['user'] = $authenticated;
$_SESSION['success'] = ['Logged in'];

header("Location: /dashboard.php");
