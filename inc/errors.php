<?php 

// echo "welcome in the error part";
$sErrors = $session->getSession('error');
if (isset ($sErrors)) {
    foreach ($sErrors as $error) {

        ?>
        <div class="alert alert-danger custom-alert text-center" role="alert">
            <?= $error ?>
        </div>
        <?PHP
    }

    $session->S_unset('error');
}
?>

