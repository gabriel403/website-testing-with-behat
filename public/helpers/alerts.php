<?php
if ($_SESSION && array_key_exists('errors', $_SESSION) && is_array($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
?>
    <div class="alert-error alert"><?= implode('<br>', $_SESSION['errors']) ?></div>
<?php
  unset($_SESSION['errors']);
}

if ($_SESSION && array_key_exists('success', $_SESSION) && is_array($_SESSION['success']) && count($_SESSION['success']) > 0) {
?>
    <div class="alert-success alert"><?= implode('<br>', $_SESSION['success']) ?></div>
<?php
  unset($_SESSION['success']);
}
