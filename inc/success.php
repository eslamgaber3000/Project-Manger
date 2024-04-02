<?php 

$success = $session->getSession('success');
if (isset ($success)) {


    ?>
    <div class="alert alert-success custom-alert text-center" role="alert">
        <?= $session->getSession('success') ?>
    </div>
    <?PHP

    $session->S_unset('success');
    // unset($_SESSION['success']);

}
?>

